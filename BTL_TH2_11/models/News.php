<?php
require_once 'config/connDB.php';

class News
{
    // Lấy tất cả bài viết
    public static function getAll() {
        $db = connDB::getConnection();
        $query = "
            SELECT news.*, categories.name AS category_name 
            FROM news 
            JOIN categories ON news.category_id = categories.id
        ";
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả dạng mảng liên kết
    }

    // Lấy bài viết theo ID
    public static function getById($id) {
        $db = connDB::getConnection();
        $query = "
            SELECT news.*, categories.name AS category_name 
            FROM news 
            JOIN categories ON news.category_id = categories.id 
            WHERE news.id = ?
        ";
        $stmt = $db->prepare($query);
        $stmt->execute([(int)$id]); // Ép kiểu ID thành số nguyên
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về kết quả dạng mảng liên kết
    }

    // Thêm bài viết mới
    public static function add($title, $content, $image, $category_id) {
        $db = connDB::getConnection();
        $query = "
            INSERT INTO news (title, content, image, category_id) 
            VALUES (?, ?, ?, ?)
        ";
        $stmt = $db->prepare($query);
        return $stmt->execute([
            htmlspecialchars($title), // Escape dữ liệu
            htmlspecialchars($content),
            htmlspecialchars($image),
            (int)$category_id
        ]);
    }

    // Cập nhật bài viết
    public static function update($id, $title, $content, $image, $category_id) {
        $db = connDB::getConnection();
        $query = "
            UPDATE news 
            SET title = ?, content = ?, image = ?, category_id = ? 
            WHERE id = ?
        ";
        $stmt = $db->prepare($query);
        return $stmt->execute([
            htmlspecialchars($title),
            htmlspecialchars($content),
            htmlspecialchars($image),
            (int)$category_id,
            (int)$id
        ]);
    }

    // Xóa bài viết
    public static function delete($id) {
        $db = connDB::getConnection();
        $query = "DELETE FROM news WHERE id = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([(int)$id]); // Ép kiểu ID thành số nguyên
    }

    // Tìm kiếm bài viết
    public static function search($keyword) {
        $db = connDB::getConnection();
        $query = "
            SELECT news.*, categories.name AS category_name 
            FROM news 
            JOIN categories ON news.category_id = categories.id 
            WHERE news.title LIKE ? OR news.content LIKE ?
        ";
        $stmt = $db->prepare($query);
        $keyword = '%' . htmlspecialchars($keyword) . '%'; // Escape dữ liệu
        $stmt->execute([$keyword, $keyword]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về kết quả dạng mảng liên kết
    }
}
?>

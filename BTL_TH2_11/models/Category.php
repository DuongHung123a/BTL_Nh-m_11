<?php
require_once 'config/connDB.php';
class Category {
    public static function getAllCategories() {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }

    public static function getCategoriesById($id) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
      public static function add($name) {
        $db = connDB::getConnection();
        $stmt = $db->prepare("INSERT INTO categories (name) VALUES (?)");
        return $stmt->execute([$name]);
    }

}
?>

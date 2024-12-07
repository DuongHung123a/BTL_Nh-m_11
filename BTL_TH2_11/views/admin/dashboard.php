<?php require_once 'views/layouts/header.php'; ?> 
<div class="container mt-5">
    <h2>Quản lý tin tức</h2>
    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary mb-3">Thêm tin tức mới</a>
    <table class="table table-bordered">
   <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Hình ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
<?php foreach ($news as $item): ?>
                <tr>
<td><?= $item['id'] ?></td>
                    <td><?= $item['title'] ?></td>
                    <td><img src="assets/images/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" style="width: 100px; height: auto;"></td>
                    <td>
                        <a href="index.php?controller=admin&action=editNews&id=<?= $item['id'] ?>" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?controller=admin&action=deleteNews&id=<?= $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once 'views/layouts/footer.php'; ?>

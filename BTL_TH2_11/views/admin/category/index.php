<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Danh sách danh mục</h2>
    <a href="index.php?controller=category&action=add" class="btn btn-primary mb-3">Thêm danh mục mới</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category['id'] ?></td>
                    <td><?= $category['name'] ?></td>
                    <td><a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-warning">Sửa</a></td>
                    <td><a href="index.php?controller=category&action=delete&id=<?= $category['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

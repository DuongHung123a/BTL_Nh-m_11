<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Thêm danh mục mới</h2>
    <form method="POST" action="index.php?controller=category&action=add">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

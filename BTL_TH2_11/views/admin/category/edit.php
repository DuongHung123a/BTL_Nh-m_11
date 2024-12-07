<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Sửa danh mục</h2>
    <form method="POST" action="index.php?controller=category&action=edit&id=<?= $category['id'] ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= $category['name'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

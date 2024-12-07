<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Sửa tin tức</h2>
    <form method="POST" action="index.php?controller=admin&action=updateNews&id=<?= $news['id'] ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" name="title" class="form-control" id="title" value="<?= $news['title'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea name="content" class="form-control" id="content" rows="5" required><?= $news['content'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Danh mục</label>
            <input type="text" name="category_id" class="form-control" id="category_id" value="<?= $news['category_id'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

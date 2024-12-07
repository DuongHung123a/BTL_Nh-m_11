<?php require_once 'views/layouts/header.php'; ?>
<div class="container mt-5">
    <h2><?= $newsItem['title'] ?></h2>
    <p><?= $newsItem['content'] ?></p>
    <img src="assets/images/<?= $newsItem['image'] ?>" alt="<?= $newsItem['title'] ?>" style="width: 100%; height: auto;">
    <p><strong>Danh mục:</strong> <?= $newsItem['category_name'] ?></p>
    <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại</a>
</div>
<?php require_once 'views/layouts/footer.php'; ?>

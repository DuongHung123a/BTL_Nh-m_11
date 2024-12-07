<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Danh sách tin tức</h2>
    <div class="row">
        <?php foreach ($news as $item): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images<?= $item['image'] ?>" class="card-img-top" alt="<?= $item['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <a href="index.php?controller=home&action=detail&id=<?= $item['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'views/layouts/footer.php'; ?>

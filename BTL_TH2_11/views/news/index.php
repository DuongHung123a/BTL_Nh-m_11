<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <h2>Danh sách tin tức</h2>
    <div class="row">
        <?php if (!empty($news) && is_array($news)): ?>
            <?php foreach ($news as $item): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <!-- Kiểm tra và hiển thị ảnh nếu tồn tại -->
                        <?php if (!empty($item['image'])): ?>
                            <img 
                                src="assets/images/<?= htmlspecialchars($item['image']) ?>" 
                                class="card-img-top" 
                                alt="<?= htmlspecialchars($item['title'] ?? 'Tin tức') ?>">
                        <?php else: ?>
                            <img 
                                src="assets/images/default.jpg" 
                                class="card-img-top" 
                                alt="Hình ảnh mặc định">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($item['title'] ?? 'Không có tiêu đề') ?></h5>
                            <a href="index.php?controller=home&action=detail&id=<?= htmlspecialchars($item['id'] ?? 0) ?>" 
                               class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Không có tin tức nào để hiển thị.</p>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

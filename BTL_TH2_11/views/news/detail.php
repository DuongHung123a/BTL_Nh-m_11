<?php require_once 'views/layouts/header.php'; ?>

<div class="container mt-5">
    <?php if (!empty($newsItem) && is_array($newsItem)): ?>
        <h2><?= htmlspecialchars($newsItem['title'] ?? 'Không có tiêu đề') ?></h2>
        <p><?= nl2br(htmlspecialchars($newsItem['content'] ?? 'Nội dung không khả dụng')) ?></p>
        
        <?php if (!empty($newsItem['image'])): ?>
            <img 
                src="assets/images/<?= htmlspecialchars($newsItem['image']) ?>" 
                alt="<?= htmlspecialchars($newsItem['title'] ?? 'Hình ảnh tin tức') ?>" 
                style="width: 100%; height: auto;">
        <?php else: ?>
            <img 
                src="assets/images/default.jpg" 
                alt="Hình ảnh mặc định" 
                style="width: 100%; height: auto;">
        <?php endif; ?>

        <p><strong>Danh mục:</strong> <?= htmlspecialchars($newsItem['category_name'] ?? 'Không xác định') ?></p>
        <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại</a>
    <?php else: ?>
        <p class="text-center">Tin tức không tồn tại hoặc đã bị xóa.</p>
        <a href="index.php?controller=home&action=index" class="btn btn-secondary">Quay lại trang chủ</a>
    <?php endif; ?>
</div>

<?php require_once 'views/layouts/footer.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
   <div class="container mt-5">
        <h2 class="text-center">Đăng nhập quản trị viên</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
<form method="POST" action="index.php?controller=admin&action=login">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>

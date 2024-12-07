<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH2 Nhóm 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">TLU News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=home&action=index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=admin&action=dashboard">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=category&action=index">Categories</a>
                </li>
            </ul>
        </div>
  <form method="GET" action="header.php">
            <input type="hidden" name="controller" value="home">
            <input type="hidden" name="action" value="search">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." value="<?= $_GET['keyword'] ?? '' ?>">
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>

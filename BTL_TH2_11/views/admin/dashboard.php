<?php require_once 'views/layouts/header.php'; ?> 
<div class="container mt-5">
    <h2>Quản lý tin tức</h2>
    <a href="index.php?controller=admin&action=addNews" class="btn btn-primary mb-3">Thêm tin tức mới</a>
    <table class="table table-bordered">
   <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Hình ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>

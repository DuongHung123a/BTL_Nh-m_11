<?php
require_once 'models/Category.php';

class CategoryController {
    public function index() {
        $categories = Category::getAllCategories();
        include 'views/admin/category/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            if (Category::add($name)) {
                header('Location: index.php?controller=category&action=index');
                exit;
            }
        }
        include 'views/admin/category/add.php';
    }

}

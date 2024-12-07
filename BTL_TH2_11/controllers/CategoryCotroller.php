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
        public function edit() {
        $id = $_GET['id'];
        $category = Category::getCategoriesById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            if (Category::update($id, $name)) {
                header('Location: index.php?controller=category&action=index');
                exit;
            }
        }
        include 'views/admin/category/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        if (Category::delete($id)) {
            header('Location: index.php?controller=category&action=index');
            exit;
        }
    }

}

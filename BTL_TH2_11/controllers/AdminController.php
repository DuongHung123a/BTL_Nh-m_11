<?php
require_once 'models/News.php';
require_once 'models/User.php'; 

class AdminController {
    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = User::authenticate($username, $password);
            if($user){
                session_start();
                $_SESSION['user'] = $user;
                header('Location: index.php?controller=admin&action=dashboard');
                exit;  
            }else{
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            }
        }
        include 'views/admin/login.php';
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: index.php?controller=admin&action=login');
    }

    public function requireLogin(){
        session_start();
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != 1){
            header('Location: index.php?controller=news&action=index');
            exit;
        }
    }  

    public function dashboard() {
        $this->requireLogin();
        $news = News::getAll();
        include 'views/admin/dashboard.php';
    }

    public function addNews() {
        $this->requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            if (News::add($title, $content, $image, $category_id)) {
                echo "<script>alert('Thêm tin tức thành công');</script>";
                header('Location: index.php?controller=admin&action=dashboard');
                exit;
            }
        }
        include 'views/admin/news/add.php';
    }

    public function editNews() {
        $this->requireLogin();
        $id = $_GET['id'];
        $news = News::getById($id);
        include 'views/admin/news/edit.php';
    }

    public function updateNews() {
        $this->requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $category_id = $_POST['category_id'];
            if (News::update($id, $title, $content, $image, $category_id)) {
                echo "<script>alert('Sửa tin tức thành công');</script>";
                header('Location: index.php?controller=admin&action=dashboard');
                exit;
            }
        }
    }

    public function deleteNews() {
        $this->requireLogin();
        $id = $_GET['id'];
        if (News::delete($id)) {
            echo "<script>alert('Xóa tin tức thành công');</script>";
            header('Location: index.php?controller=admin&action=dashboard');
            exit;
        }
    }
}

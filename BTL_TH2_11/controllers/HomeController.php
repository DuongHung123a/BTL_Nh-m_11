<?php
require_once 'models/News.php';

class HomeController {
    public function index() {
        $news = News::getAll();
        include 'views/news/index.php';
    }

    public function detail() {
        $id = $_GET['id'];
        $newsItem = News::getById($id);
        include 'views/news/detail.php';
    }
    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        $news = News::search($keyword);
        include 'views/news/index.php';
    }
}

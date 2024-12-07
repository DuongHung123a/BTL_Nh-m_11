<?php
require_once 'models/News.php';
class NewsController
{
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new News();
    }

    //Hien thi danh sach tin tuc
    public function index()
    {
        $news = $this->newsModel->getAll();
        require 'views/news/index.php';
    }

    //Hien thi chi tiet tin tuc
    public function detail($id)
    {
        $newsItem = $this->newsModel->getById($id);
        if ($newsItem) {
            require 'views/news/detail.php';
        } else {
            echo "Tin tức không tồn tại!";
        }
    }
}

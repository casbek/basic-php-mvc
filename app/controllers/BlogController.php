<?php

class BlogController
{
    private $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel(); // BlogModel sınıfını başlat
    }

    public function index()
    {
        $blogs = $this->blogModel->getAllBlogs();
        require_once "../app/views/blog/index.php";
    }

    public function create()
    {
        $blogs = $this->blogModel->getAllBlogs();
        // Blog oluşturma sayfası
        require_once "../app/views/blog/create.php";
    }

    public function show()
    {
        $blogs = $this->blogModel->getAllBlogs();
        // Blog oluşturma sayfası
        require_once "../app/views/blog/show.php";
    }
}

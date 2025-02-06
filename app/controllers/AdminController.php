<?php

class AdminController
{
    private $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel(); // BlogModel sınıfını başlat
    }

    public function index()
    {
        
        require_once "../app/views/admin/index.php";
    }

    public function dashboard()
    {
         
        // Blog oluşturma sayfası
        require_once "../app/views/admin/dashboard.php";
    }

    
}

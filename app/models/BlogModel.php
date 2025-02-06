<?php

class BlogModel
{
    private $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die("Veritabanı bağlantı hatası: " . $this->db->connect_error);
        }
    }

    public function getAllBlogs()
    {
        $query = "SELECT * FROM blogs";
        $result = $this->db->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

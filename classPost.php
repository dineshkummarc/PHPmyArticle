<?php
include('db.php');

class Post
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function addPost($title, $subtitle, $description, $content, $imgName, $slug)
    {
        $data = date('Y-m-d');
        $sql = "INSERT INTO 
                posts(title, subtitle, description, content, imgName, created_at, slug)
                VALUES('$title', '$subtitle', '$description', '$content', '$imgName', '$data', '$slug')";

        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return $result;
        }
    }

    public function getPosts()
    {
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }

    public function getSinglePost($slug)
    {
        $sql = "SELECT * FROM posts WHERE slug='$slug'";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}

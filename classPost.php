<?php
include('db.php');

class Post
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function addPost($title, $subtitle, $description, $content, $imgName)
    {
        $sql = "INSERT INTO 
                posts(title, subtitle, description, content, imgName)
                VALUES('$title', '$subtitle', '$description', '$content', '$imgName')";

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
}

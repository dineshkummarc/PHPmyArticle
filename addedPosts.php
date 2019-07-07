<?php
include('classPost.php');
include('./functions/functions.php');

// create instance
$post = new Post($db);

$_POST = json_decode($_POST['data'], true);

$title = strip_tags($_POST['title']);
$descriptions = $_POST['description'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$imgName = uploadImage(); // from functions
$slug = createSlug($title); // from functions

// send to sql
$isInsert = $post->addPost($title,  $subtitle, $descriptions, $content, $imgName,  $slug);

// response to client
if ($isInsert) {
    print_r('success');
} else {
    print_r('error');
}

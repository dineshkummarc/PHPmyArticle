<?php
include('classPost.php');

// create instance
$post = new Post($db);

// get data and convert them
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$title = strip_tags($input['title']);
$descriptions = $input['description'];

// send to sql
$isInsert = $post->addPost($title, $descriptions);

// response to client
if ($isInsert) {
    print_r('success');
} else {
    print_r('error');
}

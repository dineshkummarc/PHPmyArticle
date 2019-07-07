<?php

function uploadImage()
{
    $imagename = $_FILES['img']['name'];
    $imagetmp = $_FILES['img']['tmp_name'];
    $allowed = array('jpeg', 'png', 'jpg');

    $ext = pathinfo($imagename, PATHINFO_EXTENSION);

    if (in_array($ext, $allowed)) {
        move_uploaded_file($imagetmp, "images/" . $imagename);
    } else {
        echo "only png, jpg and jpeg image are alloowed";
    };

    return $imagename;
}

function createSlug($string)
{
    $slug = preg_replace('/[^A-Za-z0-9]+/', '-', $string);
    return $slug;
    // "a new title"  become  "a-new-title"
}

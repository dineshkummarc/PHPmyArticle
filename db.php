<?php
$db = mysqli_connect("localhost", "root", "", "blog");

if (mysqli_connect_error()) {
    echo "Filed in connect to BD " . mysqli_connect_error;
}

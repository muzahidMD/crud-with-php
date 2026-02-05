<?php

$conn = mysqli_connect("localhost", "root", "", "users_bd");

if (!$conn) {

    die("connection failed " . mysqli_connect_error());

} else {

    echo "Connection Success";
}
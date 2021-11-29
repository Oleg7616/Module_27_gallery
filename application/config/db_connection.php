<?php

$connect = mysqli_connect('localhost', 'root', '', 'gallery');

if (!$connect) {
    die ('Error connect to DataBase');
}

/*function get_connection()
{
    extract(include 'config.php');
    return new PDO('mysql:host=localhost;dbname=gallery', 'root', '');
}*/

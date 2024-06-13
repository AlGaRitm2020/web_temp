<?php

$servername = "db";
$username = "root";
$password = "kali";
$dbname = "first";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Connection error:" . mysqli_connection_error());
}

$db_create_query = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($link, $db_create_query)) {
    echo "Failed creating database";
  }
mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname);

$users_create_query = "CREATE TABLE IF NOT EXISTS users(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(30) NOT NULL
  )";


if(!mysqli_query($link, $users_create_query)) {
    echo "Не удалось создать таблицу users";
  }

$posts_create_query = "CREATE TABLE IF NOT EXISTS posts(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(5000) NOT NULL
  )";

if(!mysqli_query($link, $posts_create_query)) {
    echo "Не удалось создать таблицу posts";
  }


mysqli_close($link);
?>
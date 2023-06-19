<?php
session_start();
require './db.php';
$title = $_POST['title'];
$year = $_POST['year'];
$author = $_POST['author'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$count = $_POST['count'];
$cover = file_get_contents($_FILES['cover']['tmp_name']);

insert(
    'INSERT INTO products (title, year, author, description, price, count, cover)
    VALUES (:title, :year, :author, :desc, :price, :count, :cover)',
    [
        'title' => $title,
        'year' => $year,
        'author' => $author,
        'desc' => $desc,
        'price' => $price,
        'count' => $count,
        'cover' => base64_encode($cover)
    ]
);
header('Location: ../pages/products.php');

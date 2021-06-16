<?php
require_once './config/database.php';
require_once './classes.php';


$bookw = $_POST['bookw'];
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['disc'];
$bookw = $_POST['bookw'];
$H = $_POST['furnitureH'];
$W = $_POST['furnitureW'];
$L = $_POST['furnitureL'];
if (empty($bookw == false)) {
    $book = new Book($pdo);
    $book->pdo->query($book->set_weight($sku, $name, $price, $bookw));
    header('Location: index.php');
} elseif (empty($size == false)) {
    $disc = new Disc($pdo);
    $disc->pdo->query($disc->set_size($sku, $name, $price, $size));
    header('Location: index.php');
} else {
    $furnitre = new Furniture($pdo);
    $furnitre->pdo->query($furnitre->set_HWL($sku, $name, $price, $H, $W, $L));
    header('Location: index.php');
}

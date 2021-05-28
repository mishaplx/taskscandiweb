<?php
include './connect.php';
//book
$sku = $_POST["sku"];
$name_product = $_POST["name"];
$price = $_POST["price"];
$weight_book = $_POST['bookw'];
//book
//disc
$size = $_POST['disc'];
//disc
//furniture
$furnitureH = $_POST['furnitureH'];
$furnitureW = $_POST['furnitureW'];
$furnitureL = $_POST['furnitureL'];
//furniture

if ((empty($furnitureH) && empty($furnitureW)  && empty($furnitureL)) == false) {
    $dbh->query("INSERT INTO furniture (sku, name_product, price, height, width, length_furtinure) VALUES ('$sku', '$name_product', '$price','$furnitureH','$furnitureW','$furnitureL')");
    header('Location:../index.php');

} elseif (empty($weight_book) == false) {
    $dbh->query("INSERT INTO book (sku, name_product, price, weight_book) VALUES ('$sku', '$name_product', '$price', '$weight_book')");
    header('Location:../index.php');

} elseif (empty($size) == false) {
    $dbh->query("INSERT INTO disc (sku, name_product, price, size_disc) VALUES ('$sku', '$name_product', '$price', '$size')");
    header('Location:../index.php');
}

$dbh = null;

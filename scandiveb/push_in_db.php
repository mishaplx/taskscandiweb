<?php
require_once './classes.php';
require_once './config/database.php';
echo '<br>';

$database = new Database;
$db = $database->getConnection();





if ($_POST) {
    // if (empty($size) == false) {
    //     $obj = new Disc($db);
    //     $sku = $_POST['sku'];
    //     $name = $_POST['name'];
    //     $price = $_POST['price'];
    //     $size = $_POST['disc'];
    //     $bookw = $_POST['bookw'];
    //     $obj->sku = $sku;
    //     $obj->name = $name;
    //     $obj->price = $price;
    //     $obj->size = $size;
    //     $null = 0;
    //     $types = 'Disc';
    //     $result = $db->prepare("INSERT INTO product (sku, name_product, price, size_disc,weigth_book, length_furtinure, weigth_furtinure, height_furtinure, types)  VALUES ('$obj->sku','$obj->name', '$obj->price', '$obj->size','$null','$null ','$null', '$null', '$types')");
    //     $result->execute();
    // } 
    if (empty($bookw) == false) {
        $obj_book = new Book($db);
        $sku = $_POST['sku'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        
        $bookw = $_POST['bookw'];
        $null = 0;
        $types = 'Disc';
        $obj_book->sku = $sku;
        $obj_book->name = $name;
        $obj_book->price = $price;
        $obj_book->bookw = $bookw;
        $types_book = 'Book';
        $result = $db->prepare("INSERT INTO product (sku, name_product, price, size_disc,weigth_book, length_furtinure, weigth_furtinure, height_furtinure, types)  VALUES ('$obj_book->sku','$obj_book->name', '$obj_book->price', '$null','  $obj_book->bookw ','$null ','$null', '$null', '$types_book')");
        if ($result->execute()){
            echo 'yes';
        }
        else{
            echo'no';
        }
    }
}


?>
<a href="add__product_new_oop.html">link</a>
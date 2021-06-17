<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require_once('./index-main.php');

$size = $_POST['disc'];
$book = $_POST['bookw'];
// if ($_POST){
//     if (empty($size) == false){
//       $database = new Database();
//       $db = $database->getConnection();
//       $disk = new Disk($db);
//       $data = new valuesDiscWithFormHTML($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['disc']);
//     echo '<br>';
//     var_dump($data);
//     }
//     else{
//       echo 'вы добавляли не диск';
//     }
//   }

?>
<a href="./add__product_new_oop.html">add</a>
</body>
</html>

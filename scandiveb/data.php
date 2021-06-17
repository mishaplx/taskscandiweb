<?php
require_once'./classes.php';
require_once './config/database.php';
$publications = array(); 
//изменить mysqli на PDO

$con = new mysqli("localhost", "root", "", "product");
if($con->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
echo "Подключение успешно установлено";


$result = mysqli_query($con, "SELECT * FROM product");

while($row = mysqli_fetch_assoc($result)){

    $publications[] = new $row['types']($row);

}

$con->close();
?>
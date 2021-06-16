<?php


// укажите свои собственные учетные данные для базы данных 
$host = "localhost";
$db_name = "test";
$db_username = "root";
$password = "";
try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db_name, $db_username, '');
} catch (PDOException $e) {
    exit('Error Connecting To DataBase');
}

?>
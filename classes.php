<?php
abstract class Product
{

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public $sku;
    public $name;
    public $price;
    public $name_db;



    function get_data($name_db)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$name_db}");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete($name_db ,$delete){//42
        $query = $this->pdo->prepare("DELETE FROM {$name_db} WHERE id = :del");
        $query->bindValue('del',$delete);
        $query->execute();
        header('Location: index.php');

    }
    
}


class Book extends Product
{
    private $weight;
    public function get_weight()
    {
        return $this->weight;
    }
  
    public function set_weight($sku, $name, $price, $weight_form)
    {
        if (empty($weight_form == false)) {

            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
            $this->weight = $weight_form;
            return $sql = "INSERT INTO book (sku, name_product, price, weight_book) VALUES ('$this->sku','$this->name','$this->price','$weight_form')";
        }
    }
   
}


class Disc extends Product
{
    private $size;
    public function get_size()
    {
        return $this->size;
    }
    public function set_size($sku, $name, $price, $size_form)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size_form;
        return $sql = "INSERT INTO disc (sku, name_product, price, size_disc) VALUES ('$this->sku','$this->name','$this->price','$size_form')";
    }
}

class Furniture extends Product
{
    private $H;
    private $W;
    private $L;

    public function get_H()
    {
        return $this->H;
    }
    public function get_W()
    {
        return $this->W;
    }
    public function get_L()
    {
        return $this->L;
    }
    public function set_HWL($sku, $name, $price, $H, $W, $L)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->H = $H;
        $this->W = $W;
        $this->L = $L;
        return $sql = "INSERT INTO furniture (sku, name_product, price, height, width, length_furtinure) VALUES ('$this->sku','$this->name','$this->price','$H','$W','$L')";
    }
   
}


















// class Furniture extends Product {
//     function getData($name_db){
//         $query = $this->pdo->prepare("SELECT * FROM {$name_db}");
//         $query->execute();
//         return $query->fetchAll();
//     }
// }

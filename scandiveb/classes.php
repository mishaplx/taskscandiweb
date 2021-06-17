<?php
require_once('./config/database.php');
interface main_product
{
  //public function get_value_with_form($data);
  public function print_item();
 // public function __construct($row);
}
abstract class Product implements main_product
{
  public $sku;
  public $name;
  public $price;
  public $size;
  public $weight;
  public $H;
  public $L;
  public $W;
  // public function __construct($row)
  // {

  //   $this->sku = $row['sku'];
  //   $this->name = $row['name_product'];
  //   $this->price = $row['price'];
  //   $this->size = $row['size_disc'];
  //   $this->weight = $row['weigth_book'];
  //   $this->H = $row['height_furtinure'];
  //   $this->L = $row['weigth_furtinure'];
  //   $this->W = $row['length_furtinure'];
  //   $this->type = $row['types'];
  // }

  public function print_item()
  {
  }
}

class Disc extends Product
{
  private $param = [];
  public function __get($key)
  {
    if (array_key_exists($key, $this->param)) {
      return $this->param[$key];
    } else {
      return false;
    }
  }
  public function __set($key, $value)
  {
    $this->param[$key] = $value;
  }

  public function print_item()
  {

    echo 'это диск' . '<br>';
    echo "{$this->sku} <br> {$this->name} <br> {$this->price} <br> {$this->size}";
  }
}



class Book extends Product
{
  public function print_item()
  {
    echo 'это книга' . '<br>';
    echo "{$this->sku} <br> {$this->name} <br> {$this->price} <br> {$this->weight}";
  }
}

class Furniture extends Product
{
  public function print_item()
  {
    echo 'это мебель' . '<br>';
    echo "{$this->sku} <br> {$this->name} <br> {$this->price}$ <br> Determination: {$this->H}x{$this->L}x{$this->W}";;
  }
}

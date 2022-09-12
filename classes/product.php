<?php
class PetProduct {
  public $brand;
  public $name;
  public $price;
  public $in_stock = true;

  public function __construct($brand, $name, $price) {
    $this->brand = $this->set_brand($brand);
    $this->name = $this->set_name($name);
    $this->price = $this->set_price($price);
  }

  public function set_brand($brand) {
    if (is_string($brand)) return $brand;
  }

  public function set_name($name) {
    if (is_string($name)) return $name;
  }

  public function set_price($price) {
    if (is_numeric($price)) return $price;
  }
}


?>
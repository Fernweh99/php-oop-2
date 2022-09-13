<?php
class Product {
  public $brand;
  public $name;
  public $price;

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
    if (is_float($price)) return $price;
  }

  public function get_price() {
    return $this->price;
  }

  public function get_brand_name() {
    return $this->brand .' '. $this->name;
  }
}


?>
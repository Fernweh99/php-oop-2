<?php
require_once 'product.php';

class ToyProduct extends Product{
  public $type_pet_toy;

  public function __construct($type_pet_toy) {
    $this->type_pet_toy = $this->set_type_pet_toy($type_pet_toy);
  }

  public function set_type_pet_toy($type_pet_toy) {
    if (is_string($type_pet_toy)) return $type_pet_toy;
  }
}
?>
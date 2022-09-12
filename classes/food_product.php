<?php
require_once 'product.php';

class FoodProduct extends Product{
  public $type_pet_food;
  public $food_expiration;

  public function __construct($type_pet_food, $food_expiration) {
    $this->type_pet_food = $this->set_type_pet_toy($type_pet_food);
    $this->food_expiration = $this->set_food_expiration($type_pet_food);
  }

  public function set_type_pet_toy($type_pet_food) {
    if (is_string($type_pet_food)) return $type_pet_food;
  }

  public function set_food_expiration($food_expiration) {
    if (is_string($food_expiration)) return $food_expiration;
  }
}
?>
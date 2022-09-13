<?php
require_once __DIR__ . '/../shopping/cart.php';
class User {
  public $cart;

  public function __construct() 
  {
    $this->set_cart();
  }

  public function set_cart()
  {
    $this->cart = new Cart();
  }

  public function get_cart()
  {
    return $this->cart;
  }

  public function add_to_cart($product)
  {
    $this->cart->add_product($product);
  }

  public function remove_from_cart($product)
  {
    $this->cart->remove_product($product);
  }
}
?>
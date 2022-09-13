<?php


require_once __DIR__ .'/../products/product.php';
require_once __DIR__ .'/../products/food_product.php';
require_once __DIR__ .'/../products/toy_product.php';

class Cart 
{
  public $products = [];

  public function get_products_list()
  {
    return $this->products;
  }

  public function get_total() {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->get_price();
    }
    return $total;
  }

  public function add_product($product)
  {
    if($product instanceof Product) {
      $this->products[] = $product;
    } else new Exception('$product must be a Product instance');
  }

  public function remove_product($product)
  {
    if($product instanceof Product && count($products) > 0){
      $index = $product->get_brand_name();
      foreach($products as $key => $value){
        if($index === $value->get_brand_name()){
          unset($this->products[$key]);
        }
      }
    }
  }
}

?>
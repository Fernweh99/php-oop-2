<?php
include_once __DIR__ . '/classes/products/food_product.php';
include_once __DIR__ . '/classes/shopping/cart.php';
include_once __DIR__ . '/classes/user/user.php';

$prodotto = new FoodProduct('Scatoletta', 'cibo per gatti', 2.5, 'gatti', '10/10/2015');
$prodotto2 = new FoodProduct('Scate', 'cibo cinesi', 12.5, 'chianga', '10/10/2005');

$cliente = new User();

$cliente->add_to_cart($prodotto);
$cliente->add_to_cart($prodotto2);

var_dump($cliente->get_cart())


?>
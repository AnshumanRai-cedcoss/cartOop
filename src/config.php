<?php
// $products = json_decode('[{101,"Basket Ball","basketball.png",150},
// {"id":102,"name":"Football","image":"football.png","price":120},
// {"id":103,"name":"Soccer","image":"soccer.png","price":110},
// {"id":104,"name":"Table Tennis","image":"table-tennis.png","price":130},
// {"id":105,"name":"Tennis","image":"tennis.png","price":100}]', true);
require("classes/Product.php");
require("classes/Cart.php");

$product1 = new \myApp\Product(101, "Basket Ball", "basketball.png", 150);
$product2 = new \myApp\Product(102, "Football", "football.png", 120);
$product3 = new \myApp\Product(103, "Soccer", "soccer.png", 110);
$product4 = new \myApp\Product(104, "Table Tennis", "table-tennis.png", 130);
$product5 = new \myApp\Product(105, "Tennis", "tennis.png", 100);

$prod = array($product1->getProductArray(), $product2->getProductArray(), $product3->getProductArray(), $product4->getProductArray(), $product5->getProductArray());
// echo "<pre>";
// print_r($prod);
// echo "</pre>";


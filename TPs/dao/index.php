<?php
require_once('Product.php');
require_once('ProductDAO.php');

echo "<h3>Test Product</h3>";
$product = new Product();
$product->setLabel("foo");
$product->setPrice(240);

$id = ProductDAO::create($product);

$products = ProductDAO::read();
var_dump($products);echo "<hr/>";

$product->setLabel("someone");
ProductDAO::update($product);
var_dump($products);echo "<hr/>";

$product = ProductDAO::findById($id);
var_dump($product);echo "<hr/>";

//Suppression
//ProductDAO::delete($id);
?>
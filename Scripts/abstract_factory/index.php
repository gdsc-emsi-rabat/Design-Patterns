<?php
	require_once('ProductFactory1.php');
	require_once('ProductFactory2.php');

	$factory = new ProductFactory1();
	$product = $factory->createProductA();
	$product->draw(); //Affiche: ProductA1
	$product = $factory->createProductB();
	$product->draw(); //Affiche: ProductB1

	$factory = new ProductFactory2();
	$product = $factory->createProductA();
	$product->draw(); //Affiche: ProductA2
	$product = $factory->createProductB();
	$product->draw(); //Affiche: ProductB2
?>
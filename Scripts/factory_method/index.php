<?php
	require_once('ConcreteCreator.php');
	
	$factory = new ConcreteCreator();
	
	$product = $factory->create("circle");
	$product->draw(); //Affiche: Circle
	
	$product = $factory->create("triangle");
	$product->draw(); //Affiche: Triangle
	
	$product = $factory->create("square");
	$product->draw(); //Affiche: Square
?>
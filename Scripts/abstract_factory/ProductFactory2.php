<?php
require_once('AbstractProductFactory.php');
require_once('ProductA2.php');
require_once('ProductB2.php');

class ProductFactory2 implements AbstractProductFactory {
	//Concrete ProductFactory
	public function createProductA(){
		return new ProductA2();
	}
	
	public function createProductB(){
		return new ProductB2();
	}
}
?>
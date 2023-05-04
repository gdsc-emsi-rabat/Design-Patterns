<?php
require_once('AbstractProductFactory.php');
require_once('ProductA1.php');
require_once('ProductB1.php');

class ProductFactory1 implements AbstractProductFactory {
	public function createProductA(){
		return new ProductA1();
	}
	
	public function createProductB(){
		return new ProductB1();
	}
}
?>
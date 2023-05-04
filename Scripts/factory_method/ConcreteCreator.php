<?php
require_once('Creator.php');
require_once('Circle.php');
require_once('Square.php');
require_once('Triangle.php');

class ConcreteCreator implements Creator {

	//Factory method implementation
	public function create($condition){
		$product = null;
		
		if($condition == "circle"){
			$product = new Circle();
		}else if($condition == "square"){
			$product = new Square();
		}else if($condition == "triangle"){
			$product = new Triangle();
		}
		
		return $product;
	}
}
?>
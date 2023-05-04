<?php
require_once('Product.php');

class Circle implements Product {
	public function draw(){
		echo "Circle<br/>";
	}
}
?>
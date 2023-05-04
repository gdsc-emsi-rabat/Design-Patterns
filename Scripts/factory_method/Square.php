<?php
require_once('Product.php');

class Square implements Product {
	public function draw(){
		echo "Square<br/>";
	}
}
?>
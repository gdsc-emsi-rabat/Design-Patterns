<?php
require_once('Product.php');

class Triangle implements Product {
	public function draw(){
		echo "Triangle<br/>";
	}
}
?>
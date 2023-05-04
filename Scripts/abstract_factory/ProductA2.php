<?php
require_once('ProductA.php');

class ProductA2 implements ProductA {
	public function draw(){
		echo "ProductA2<br/>";
	}
}
?>
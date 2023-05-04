<?php
require_once('ProductA.php');

class ProductA1 implements ProductA {
	public function draw(){
		echo "ProductA1<br/>";
	}
}
?>
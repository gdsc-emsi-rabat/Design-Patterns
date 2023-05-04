<?php
interface AbstractProductFactory {
	//Abstract Faotory methods, each method create the appropriate family of objects
	public function createProductA();
	public function createProductB();
}
?>
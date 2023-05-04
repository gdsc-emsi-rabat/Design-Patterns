<?php
abstract class Component {
	public function addChild($comp){
		echo "Cannot add a child<br/>";
	}
	
	public abstract function operation();
}
?>
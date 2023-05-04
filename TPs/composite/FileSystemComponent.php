<?php
abstract class FileSystemComponent {
	public function addChild($comp){
		echo "Operation not supported<br/>";
	}
	
	public abstract function operation();
}
?>
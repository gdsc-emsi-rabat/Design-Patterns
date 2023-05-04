<?php
require_once('FileSystemComponent.php');

class Folder extends FileSystemComponent {
	private $components = array();
	
	public function addChild($comp){
		$this->components[] = $comp;
		echo "Number of components: " . count($this->components) . "<br/>";
	}
	
	public function operation(){
		echo "Folder<br/>";
	}
}
?>
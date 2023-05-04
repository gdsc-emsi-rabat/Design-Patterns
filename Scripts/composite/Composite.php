<?php
require_once('Component.php');

class Composite extends Component {
	private $components = array();
	
	public function addChild($comp){
		$this->components[] = $comp;
		echo "Number of components: " . count($this->components) . "<br/>";
	}
	
	public function operation(){
		echo "Composite<br/>";
	}
}
?>
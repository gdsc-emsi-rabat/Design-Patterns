<?php
class Preferences {
	private $props = array(); //Déclaration du tableau des propriétés
	private static $instance; //Variable privée et statique qui sera testé si c'est null
	
	private function __construct() { } //Constructeur privée de la classe
	
	public static function getInstance() {
		if (empty( self::$instance)) { //Si la classe n'a pas d'instance en cours, la créer
			self::$instance = new Preferences();
		}
		return self::$instance; //Toujours retourner l'instance créée en premier lieu
	}
	
	//Getter et setter du tableau de propriétés
	public function setProperty($key, $val) {
		$this->props[$key] = $val;
	}
	public function getProperty($key) {
		return $this->props[$key];
	}
}
?>
<?php
class Preferences {
	private $props = array(); //D�claration du tableau des propri�t�s
	private static $instance; //Variable priv�e et statique qui sera test� si c'est null
	
	private function __construct() { } //Constructeur priv�e de la classe
	
	public static function getInstance() {
		if (empty( self::$instance)) { //Si la classe n'a pas d'instance en cours, la cr�er
			self::$instance = new Preferences();
		}
		return self::$instance; //Toujours retourner l'instance cr��e en premier lieu
	}
	
	//Getter et setter du tableau de propri�t�s
	public function setProperty($key, $val) {
		$this->props[$key] = $val;
	}
	public function getProperty($key) {
		return $this->props[$key];
	}
}
?>
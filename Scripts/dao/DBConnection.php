<?php
class DBConnection{
	//Classe Singleton pour l'établissement de la connexion
	private static $instance = null;
	
	//Constantes utilisées pour établir la connexion avec la BDD
	private static $host = 'localhost';
	private static $db_name ='dao_test';
	private static $username = 'root';
	private static $password = '';
	
	//Constructeur privé, le fondement du pattern Singleton
	private function __construct(){ 
		try{
			//Instanciation de la classe PDO avec les constantes définies
			self::$instance = new PDO('mysql:host='.self::$host.';dbname='.self::$db_name, self::$username, self::$password);
			//Activation des exceptions PDO, pour afficher les erreurs de traitement de la BDD
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			echo 'Error: '.$e->getMessage().'<br />';
		}
	}
	
	//Instancier un nouveau PDO s'il n'existe pas
	public static function getInstance() {
		if (self::$instance === null) {
           new DBConnection();
		}
		return self::$instance;
	}
}
?>
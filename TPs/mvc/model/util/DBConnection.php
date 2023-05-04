<?php
class DBConnection{
	private static $instance = null;
	
	private static $host = 'localhost';
	private static $db_name ='forum';
	private static $username = 'root';
	private static $password = '';
	
	private function __construct(){ 
		try{
			self::$instance = new PDO('mysql:host='.self::$host.';dbname='.self::$db_name, self::$username, self::$password);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			echo 'Error: '.$e->getMessage().'<br />';
		}
	}
	
	public static function getInstance() {
		if (self::$instance === null) {
           new DBConnection();
		}
		return self::$instance;
	}
}
?>
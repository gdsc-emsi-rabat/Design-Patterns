<?php
require_once('ConsoleLogger.php');
require_once('FileLogger.php');
require_once('DBLogger.php');

class LoggerFactory {
	public static function create($type){
		$logger = null;
		
		if($type == "file"){
			$logger = new FileLogger();
		}else if($type == "db"){
			$logger = new DBLogger();
		}else{
			$logger = new ConsoleLogger();
		}
		
		return $logger;
	}
}
?>
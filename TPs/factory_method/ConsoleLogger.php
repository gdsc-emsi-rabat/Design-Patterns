<?php
require_once('Logger.php');

class ConsoleLogger implements Logger {
	public function log($event){
		echo '[LOGGER] ' . date("d/m/Y - H:i:s") . ' : ' . $event;
	}
}
?>
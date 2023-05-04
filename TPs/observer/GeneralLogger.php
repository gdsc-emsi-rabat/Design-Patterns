<?php
require_once('Observer.php');

class GeneralLogger implements Observer {
	function update($status) {
		// add login data to log
		print __CLASS__.": logging login data... <br/>";
	}
}
?>
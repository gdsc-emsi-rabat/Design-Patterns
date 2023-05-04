<?php
require_once('Observer.php');
require_once('Login.php');

class SecurityMonitor implements Observer {
	function update($status) {
		if ($status == Login::LOGIN_WRONG_PASS) {
			echo __CLASS__.": sending mail to sysadmin<br/>";
		}else{
			echo __CLASS__.": Login OK...<br/>";
		}
	}
}
?>
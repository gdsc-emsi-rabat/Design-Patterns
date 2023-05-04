<?php
	require_once('Login.php');
	require_once('SecurityMonitor.php');
	
	$login = new Login();
	new SecurityMonitor($login);
	
	$login->handleLogin("foo", "1234", "127.0.0.1"); //Login KO
	$login->handleLogin("foo", "foo", "127.0.0.1"); // Login OK
?>
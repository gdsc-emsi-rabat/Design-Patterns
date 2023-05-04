<?php
	require_once('Login.php');
	require_once('SecurityMonitor.php');
	require_once('GeneralLogger.php');
	
	$login = new Login();
	$login->attach(new SecurityMonitor());
	$login->attach(new GeneralLogger());

	$login->handleLogin("foo", "1234", "127.0.0.1");
	$login->handleLogin("foo", "foo", "127.0.0.1");
?>
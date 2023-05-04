<?php
	require_once('LoggerFactory.php');
	
	$logger = LoggerFactory::create("file");
	$logger->log("FOO");
	
	$logger = LoggerFactory::create("db");
	$logger->log("FOO");
	
	$logger = LoggerFactory::create("logger-inexistant");
	$logger->log("FOO");
?>
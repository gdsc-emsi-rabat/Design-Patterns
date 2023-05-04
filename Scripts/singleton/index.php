<?php
	require_once('Preferences.php');
	$pref = Preferences::getInstance(); //Récupération de l'instance de la classe Preferences
	$pref->setProperty("nom", "abcd"); //Ajout d'une propriété au tableau

	unset($pref); //Suppression de la référence vers la variable $pref
	
	$pref2 = Preferences::getInstance(); //Récupération de l'instance de la classe Preferences
	print $pref2->getProperty("nom") . "\n"; //Affiche : "abcd" 
	//Donc la propriété a gardée la même valeur, même si on a changé de référence, 
	//parce qu'il n'ya qu'une seul instance de la classe Preferences
?>
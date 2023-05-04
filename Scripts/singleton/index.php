<?php
	require_once('Preferences.php');
	$pref = Preferences::getInstance(); //R�cup�ration de l'instance de la classe Preferences
	$pref->setProperty("nom", "abcd"); //Ajout d'une propri�t� au tableau

	unset($pref); //Suppression de la r�f�rence vers la variable $pref
	
	$pref2 = Preferences::getInstance(); //R�cup�ration de l'instance de la classe Preferences
	print $pref2->getProperty("nom") . "\n"; //Affiche : "abcd" 
	//Donc la propri�t� a gard�e la m�me valeur, m�me si on a chang� de r�f�rence, 
	//parce qu'il n'ya qu'une seul instance de la classe Preferences
?>
<?php
	require_once('Folder.php');
	require_once('File.php');
	
	$comp1 = new Folder();
	$comp1->operation(); //Affiche: Folder
	$comp2 = new File();
	$comp2->addChild($comp1); //Affiche: Operation not supported
	$comp2->operation(); //Affiche: File
	
	$comp3 = new Folder();
	$comp3->operation(); //Affiche: Folder
	$comp3->addChild($comp1); //Affiche: Number of components: 1
	$comp3->addChild($comp2); //Affiche: Number of components: 2
?>
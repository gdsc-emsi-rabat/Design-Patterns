<?php
	require_once('Composite.php');
	require_once('Leaf.php');
	
	$comp1 = new Composite();
	$comp1->operation(); //Affiche: Composite
	$comp2 = new Leaf();
	$comp2->addChild($comp1); //Affiche: Cannot add a child
	$comp2->operation(); //Affiche: Leaf
	
	$comp3 = new Composite();
	$comp3->operation(); //Affiche: Composite
	$comp3->addChild($comp1); //Affiche: Number of components: 1
	$comp3->addChild($comp2); //Affiche: Number of components: 2
?>
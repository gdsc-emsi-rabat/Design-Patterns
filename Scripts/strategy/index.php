<?php
	require_once('ConcreteStrategyA.php');
	require_once('ConcreteStrategyB.php');
	require_once('ConcreteStrategyC.php');
	
	$behavior = new ConcreteStrategyA();
	$behavior->algo(); //Affiche : Behavior A
	$behavior = new ConcreteStrategyB();
	$behavior->algo(); //Affiche : Behavior B
	$behavior = new ConcreteStrategyC();
	$behavior->algo(); //Affiche : Behavior C
?>
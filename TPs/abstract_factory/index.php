<?php
	require_once('WindowsPlanFactory.php');
	require_once('LinuxPlanFactory.php');

	$factory = new LinuxPlanFactory();
	$hosting = $factory->createBasicPlan();
	$hosting->features(); //Affiche: Linux Basic Plan
	$hosting = $factory->createPremiumPlan();
	$hosting->features(); //Affiche: Linux Premium Plan

	$factory = new WindowsPlanFactory();
	$hosting = $factory->createBasicPlan();
	$hosting->features(); //Affiche: Windows Basic Plan
	$hosting = $factory->createPremiumPlan();
	$hosting->features(); //Affiche: Windows Premium Plan
?>
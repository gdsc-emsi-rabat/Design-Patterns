<?php
require_once('WindowsPlanBasic.php');
require_once('WindowsPlanPremium.php');

class WindowsPlanFactory {
	public function createBasicPlan(){
		return new WindowsPlanBasic();
	}
	
	public function createPremiumPlan(){
		return new WindowsPlanPremium();
	}
}
?>
<?php
require_once('LinuxPlanBasic.php');
require_once('LinuxPlanPremium.php');

class LinuxPlanFactory {
	public function createBasicPlan(){
		return new LinuxPlanBasic();
	}
	
	public function createPremiumPlan(){
		return new LinuxPlanPremium();
	}
}
?>
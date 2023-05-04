<?php
require_once('HostingPlan.php');

abstract class LinuxPlan implements HostingPlan{
	public function operatingSystem(){
		echo "Linux OS<br/>";
	}
	
	public abstract function features();
}
?>
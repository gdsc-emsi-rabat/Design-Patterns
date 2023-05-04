<?php
require_once('HostingPlan.php');

abstract class WindowsPlan implements HostingPlan{
	public function operatingSystem(){
		echo "Windows OS<br/>";
	}
	
	public abstract function features();
}
?>
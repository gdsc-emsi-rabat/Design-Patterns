<?php
require_once('Strategy.php');

class ConcreteStrategyA implements Strategy{
	function algo(){
		echo "Behvior A<br/>";
	}
}
?>
<?php
require_once('Strategy.php');

class ConcreteStrategyB implements Strategy{
	function algo(){
		echo "Behvior B<br/>";
	}
}
?>
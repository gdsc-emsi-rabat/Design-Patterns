<?php
require_once('Strategy.php');

class ConcreteStrategyC implements Strategy {
	function algo(){
		echo "Behvior C<br/>";
	}
}
?>
<?php
require_once('Document.php');

class HtmlDocument implements Document{
	function render(){
		echo "Generating HTML File...<br/>";
	}
}
?>
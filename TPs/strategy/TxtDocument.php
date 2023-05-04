<?php
require_once('Document.php');

class TxtDocument implements Document{
	function render(){
		echo "Generating Text File...<br/>";
	}
}
?>
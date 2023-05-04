<?php
require_once('Document.php');

class PdfDocument implements Document{
	function render(){
		echo "Generating PDF File...<br/>";
	}
}
?>
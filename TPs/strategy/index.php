<?php
	require_once('PdfDocument.php');
	require_once('HtmlDocument.php');
	require_once('TxtDocument.php');
	
	$document = new PdfDocument();
	$document->render(); //Affiche : Generating PDF File...
	$document = new HtmlDocument();
	$document->render(); //Affiche : Generating HTML File...
	$document = new TxtDocument();
	$document->render(); //Affiche : Generating Text File...
?>
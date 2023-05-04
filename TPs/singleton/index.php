<?php
	require_once('DBConnection.php');
	
	$conn1 = DBConnection::getInstance();;
	$conn2 = DBConnection::getInstance();
	if($conn1 === $conn2){
		echo "Both conn1 and conn2 have the same reference";
	}
	// $conn1 et $conn2 ont la même référence, l'objet PDO n'est pas créée de nouveau 
?>
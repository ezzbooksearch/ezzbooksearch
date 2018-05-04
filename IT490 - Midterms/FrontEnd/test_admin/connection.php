<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db 	= "multi_login";
	
	$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);
	
	// Check connection 
	
	if($conn->connect_error){
		echo "Connection was failed";
	}
	
?>

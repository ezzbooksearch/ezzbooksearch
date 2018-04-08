<?php
$hostname = "localhost"     ; 			// or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$username = "root" ;
$project  = "USERS" ;
$password = "ansh123" ;

$dbcon=mysqli_connect($hostname, $username, $password);

mysqli_select_db($dbcon,"USERS");

?>

<?php

$hostname = "sql1.njit.edu"     ; 			// or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$username = "pba3" ;
$project  = "pba3" ;
$password = "ZM5LkSSoe" ;

($dbh = mysql_connect ( $hostname, $username, $password))
	or die ( "Unable to connect to MySQL database" );

mysql_select_db($project);
//print "Successfully connected to mySQL.<br><br><br>";
?>
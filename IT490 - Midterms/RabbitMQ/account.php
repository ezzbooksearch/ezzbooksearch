<?php


$hostname = "localhost";
$username = "root" ;
$project  = "booksearch" ;
$password = "root" ;

// started connection
($conn = mysqli_connect ( $hostname, $username, $password))
	or die ( "Unable to connect to MySQL database" );


mysqli_select_db($conn, $project);
// echo  'Successfully Connected';

?>


<?php
$dbuser='cm237';
$hostname = "sql2.njit.edu"     ; 			// or "sql2.njit.edu"   OR "SQL1.NJIT.EDU"
$project  = "cm237" ;
$password = "slander84" ;
$dbname='bookstore';
	//$Connect=new mysqli('localhost',$user,$password,$db); or die("unable to connect");
	$dbconnect=@mysql_connect('localhost',$dbuser, $dbpassword, $dbname)or die("unable to connect");
	if ($dbconnect === FALSE)
		echo "<p>Connection error: ". mysql_error() . "</p>\n";
	else 
	{
		if (@mysql_select_db($dbname, $dbconnect) === FALSE)
		{
			echo "<p>Could not select the\"$db\" " ."database: ".mysql_error($dbconnect) ."</p>\n";
			mysql_close($dbconnect);
			$dbconnect = FALSE;
		}
		$dbtemp=@mysql_select_db($dbname, $dbconnect);
		
		/*if($dbconnect and $dbtemp)
		{
			echo "hello connected and selected";
		}
		*/
	}
	?>
 

<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo"==>".$password."";
	require("connect.php");
	$dbselect = mysql_select_db("bookstore") or die(mysql_error());
	$result = mysql_query("SELECT * FROM users WHERE user_user_name = '" . $_POST['username'] . "' and user_password = '" . md5($_POST['password']) . "' LIMIT 1") or die(mysql_error());
	//echo"==>".$password."";
	if (mysql_result($result, 0) > 0)
	{	
		echo "Welcome back !!!  .$username";
		echo"<h1> you r allowed to checkout</h1>";
		$_SESSION['username']=$username;
	}
	
	if (mysql_result($result, 0) < 1)
	{
		header("Location: http://localhost/php project/index.php?page=registration");
		//$sql="INSERT INTO members(User, Password)VALUES('$_POST['username']','$_POST['password']')";
		//echo"==>".$password."";
		//$result = mysql_query("INSERT INTO members (User, Password)
		//VALUES ('$username', '" . md5('($password)') . "')") or die(mysql_error());
		//echo md5('($password)');
		//$result = mysql_query("INSERT INTO members (User, Password)
		//VALUES ('$username','$password')") or die(mysql_error());
		//echo "<br />1 record added";
	}


?>
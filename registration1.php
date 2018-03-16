<html>
	<head>
		<title>Book Store</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />
		<script type="text/javascript">
			$function()
			{
			}
		</script>
	</head>
	<body>
		
		<div id="Main">
			<form>
				<?php
					require("connect.php");
					
					$username = $_POST['username'];
					$emailid = $_POST['emailid'];
					$password = $_POST['password'];
					$confpassword = $_POST['confpassword'];
					$isValidated = true;
	
			
		    if (strlen($password) < 6)
			{
				echo ("Password too short..");
			}
			else if (strcmp($password, $confpassword) != 0)
			{
				echo ("Password and Confirm Password doesn't matched");
					$isValidated = false;
			}
			
			
	if ($isValidated)
	{
		$select_sql = mysql_query ("SELECT count(*) FROM users WHERE user_email_id = '" . $_POST['emailid'] . "' OR user_user_name = '" .$_POST['username'] . "' LIMIT 1");
		if (mysql_result($select_sql, 0) == 0)
		{
			$insert_sql = mysql_query("INSERT INTO users( user_user_name, user_email_id, user_password) VALUES('" . $_POST['username'] . "','" . $_POST['emailid'] . "','" . md5($_POST['password']) . "')");
			if ($insert_sql == 1)
			{
				echo "Welcome New User, " . $_POST['username'] . " ...!!!<br /><br />";
				echo "<label><a href='login.php'>Click here to login...!!!</a></label><br />";
				$_SESSION['username']=$username;
				//require("cart.php");
			}
		}
		else
		{
			echo "Email ID: " . $_POST['emailid'] . " or User Name: " . $_POST['username'] . " is already registered...!!!<br /><br />";
			echo "<label><a href='index.php?page=registration'>Click here to login...!!!</a></label><br />";
		}
	}
	else
	{
		echo "<a href='index.php?page=registration'>Try Again?</a>";
	}
?>
			</form>
		</div>
	</body>
</html>
<?php
 
include 'connection.php';

error_reporting(0);

$name = $_POST['Name'];
  

$sql = "DELETE from users WHERE id = $name";


if ($_POST['submit']){
	if(mysqli_query($conn, $sql)){
		echo "Data removed successfully!";
	}
	else{
		echo "Something went wrong...";
	}
}


?>

<html>
<head>
<title>Delete User</title>
</head>

<body>
   
	<h2>Enter the ID of the user you'd like to delete</h2>
		<form action="delete.php" method="POST">
			ID: <input type="text" name="Name"><br>

			<br><input type="submit" name="submit" value="Delete"/></center>
</body>

</html>
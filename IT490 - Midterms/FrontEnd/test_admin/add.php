<?php
 
include 'connection.php';
 error_reporting(0);
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $pass = $_POST['Pass'];
  
if(!$_POST['submit']){
	// you can remove this echo code and add alert using JS or use required tag in your input feilds.
	
  echo "All feilds must be filled";
  
}

else {
 
$sql = "INSERT INTO users (username,email,password)
VALUES ('$name', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "<h1><center>New record created successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<title>Add User</title>
</head>

<body>
   
	<h2>Add User</h2>
		<form action="add.php" method="POST">
			Name: <input type="text" name="Name" value="" required><br><br>
			Email: <input type="email" name="Email" value="" required><br><br>
			Password: <input type="password" name="Password" value="" required><br>
	<br>
			<input type="submit" name="submit" value="add"/></center>
</body>

</html>
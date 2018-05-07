<?php
 
include ('../functions.php');

error_reporting(0);

$name = $_POST['Name'];
  

$sql = "DELETE from users WHERE id = $name";


if ($_POST['submit']){
	if(mysqli_query($db, $sql)){
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


	
			<div id="users">
<br><br>

<center><h1>Data available</h1></center><br><br>
<?php
    include 'connection.php';
	
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<center><h4>ID: </h4>" . $row["id"]. "<br>" . "  Name: " . $row["username"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["password"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>

</body>

</html>
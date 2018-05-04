<html>
<head>
<title>Admin Portal</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin.png">
<h3> Welcome to the admin portal!</h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="add.php" target="_blank"> Add User </a></li>
	<li><a href="delete.php" target="_blank"> Delete User </a></li>
	<!--<li><a href="update.php" target="_blank"> Update Post </a></li>-->
 </ul>	
</div>

<div id="users">
<br><br>

<center><h1>Data available</h1></center>
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
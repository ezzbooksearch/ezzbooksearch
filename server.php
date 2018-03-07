<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_errors', 1);


$username = "";
$email    = "";
$errors   =array();

//connect to db
include ("account.php");

//$db = mysqli_connect('localhost', 'root', '', 'authentication');
// if the register button is clicked
if (isset($_POST['register'])){
	 //session_start();
	$username  = mysql_real_escape_string($_POST['username']);
	$email     = mysql_real_escape_string($_POST['email']);
	$password  = mysql_real_escape_string($_POST['password']);
	$password2 = mysql_real_escape_string($_POST['password2']);
	//$hash      = mysql_real_escape_string($_POST['hash']);
 
// ensure that form fields are filled properly
if (empty($username)){
	array_push($errors, "Username is required");
}

if (empty($email)){
	array_push($errors, "Email is required");
}

if (empty($password)){
	array_push($errors, "Password is required");
}

if ($password != $password2){
	array_push($errors, "The two password do not match");
}

//if there are no errors create user
if (count($errors) == 0){
	$password = md5($password); //hash password before storing for security purposes
	$sql="INSERT INTO booksearch (username, email, password) VALUES ('$username', '$email','$password')";
	
		mysql_query($db, $sql) ;
		($sql=mysql_query($sql)) or die(mysql_error());//return results
		$_SESSION['username'] =$username;
		//$_SESSION['success'] ="You are now logged in/ you now have to verify your email";
		header('location: index.php'); //redirect to Home page
	}
}

//log user in from login page
if (isset($_POST['login'])){
	$username  = mysql_real_escape_string($_POST['username']);
	$password  = mysql_real_escape_string($_POST['password']);
	
	if (empty($username)){
	array_push($errors, "Username is required");
}

if (empty($password)){
	array_push($errors, "Password is required");
}


if (count($errors) == 0){
	$password = md5($password); //hash pasword for security purposes
	$query ="select * from booksearch where username ='$username' and password='$password'";
	$result = mysql_query( $query);
	if(mysql_num_rows($result) ==1){ 
		//log user in
		$_SESSION['username'] =$username;
		$_SESSION['success'] ="You are now logged in";
		header('location: index.php'); //redirect to Home page
	} else{
		array_push($errors, "Wrong username/password combination");
		//header('location: loginn.php');
	    }
		
	}
}




//logout
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: loginn.php');
}

		
?>

<?php
session_start(); //starts the session

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	ini_set('display_errors', 1);

require_once('rabbitmqphp_example/path.inc');
require_once('rabbitmqphp_example/get_host_info.inc');
require_once('rabbitmqphp_example/rabbitMQLib.inc');
//require_once('testRabbitMQClient.php');
/*$username = "";
$email    = "";
//$type     = "type";
*/
$errors   = array();
//connect to DataB
include("account.php");
//include("functions.php");

/*$type = isset($_POST['type'])? $_POST['type']: '';
if (isset($_POST['login'])){
	echo $_REQUEST['type'];
}
switch ($type){
	case 'login':
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$response = LoGinUser($username, $password);
	print_r($response);
	break;
}*/
//include ("testRabbitMQClient.php");
// if the register button is clicked
if (isset($_POST['register'])){
	 //session_start();
	$username  = mysqli_real_escape_string($conn, $_POST['username']);
	$email     = mysqli_real_escape_string($conn, $_POST['email']);
	$password  = mysqli_real_escape_string($conn, $_POST['password']);
	$password2 = mysqli_real_escape_string($conn, $_POST['password2']);
	//$hash      = mysql_real_escape_string($_POST['hash']);
 
// ensure that form fields are filled properly
if (empty($username)){
	array_push($errors, "You need a Username");
}
if (empty($email)){
	array_push($errors, "You need an Email");
}
if (empty($password)){
	array_push($errors, "Password is required");
}
if ($password != $password2){
	array_push($errors, "Both password do not match");
}
//if there are no errors create user
if (count($errors) == 0){
	$password = md5($password); //hash password before storing for security purposes
	$sql="INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";
	
		mysqli_query($conn, $sql) ;
		($sq=mysqli_query($conn, $sql)) or die(mysqli_error($conn));//return results
		$_SESSION['username'] =$username;
		//$_SESSION['success'] ="You are now logged in/ you now have to verify your email";
		header('location: index.php'); //redirect to Home page
	}
}
//log user in from login page
//function LoginUser($username, $password){
if (isset($_POST['login'])){
	$username  = mysqli_real_escape_string($conn, $_POST['username']);
	$password  = mysqli_real_escape_string($conn, $_POST['password']);
	
if (empty($username)){
array_push($errors, "You need a Username");
}
if (empty($password)){
	array_push($errors, "Password is required");
}
if (count($errors) == 0){
	$password = md5($password); //hash pasword for security purposes
	$query ="select * from users where username ='$username' and password='$password'";
	$result = mysqli_query($conn,  $query);
	if(mysqli_num_rows($result) == 0){ 
		//log user in
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['success']  = "You are now logged in";
		header('location: index.php'); //redirect to Home page
	} else{
		array_push($errors, "Wrong username/password combination");
		//header('location: login.php');
	    }
		
	}
}
//logout
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: index.html');
}
		
?>

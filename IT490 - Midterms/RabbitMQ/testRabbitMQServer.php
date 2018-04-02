#!/usr/bin/php
<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  ini_set('display_errors', 1);
include"server.php";  
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

include "account.php";

//$username = ($_POST['username']);
//$password = ($_POST['password']);

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['type'] = $type;

function doLogin($username,$password)
{
    // lookup username in databas
    // check password
    //log user in from login page
    if (isset($_POST['login'])){
      $username  = mysqli_real_escape_string($conn, $_POST['username']);
      $password  = mysqli_real_escape_string($conn, $_POST['password']);
      
      if (empty($username)){
      array_push($errors, "Username is required");
    }
    
    if (empty($password)){
      array_push($errors, "Password is required");
    }
    
    
    if (count($errors) == 0){
      $password = md5($password); //hash pasword for security purposes
      $query ="select * from booksearch where username ='$username' and password='$password'";
      $result = mysqli_query($conn,  $query);
      if(mysqli_num_rows($result) ==0){ 
        //log user in
        $_SESSION['username'] =$username;
        $_SESSION['success'] ="You are now logged in";
        header('location: index.php'); //redirect to Home page
      } else{
        array_push($errors, "Wrong username/password combination");
        return false;
        //header('location: loginn.php');
          }
        
      }
    }
    return true;
    //return false if not valid
}

/*
function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
*/
?>


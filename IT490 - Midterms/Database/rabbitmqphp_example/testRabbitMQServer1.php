#!/usr/bin/php
<?php
//require_once('path.inc');
//require_once('get_host_info.inc');
//require_once('rabbitMQLib.inc');
$username = '';
$password = '';

function doLogin($username,$password) {
    // lookup username in databas
    // check password
	if(!empty($username)){
		echo $username;
	} else {
		echo "username is required";
	}
	if (!empty($password)){
		echo $password;
	} else{
		echo "password is needed";
	}
    return true;
    //return false if not valid
}
/*
function requestProcessor($req)
{
  echo "received request".PHP_EOL;
  var_dump($req);
  if(!isset($req['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($http['type'])
  {
    case "login":
      return doLogin($http['username'],$http['password']);
    case "validate_session":
      return doValidate($http['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();*/
?>


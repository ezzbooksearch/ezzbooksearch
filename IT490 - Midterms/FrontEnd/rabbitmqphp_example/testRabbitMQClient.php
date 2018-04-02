#!/usr/bin/php
<?php
//session_start();
const BRR = '<br />';


require_once('rabbitmqphp_example/path.inc');
require_once('rabbitmqphp_example/get_host_info.inc');
require_once('rabbitmqphp_example/rabbitMQLib.inc');

include("server.php");
// checks if seesion already started	
/*if(isset($_SESSION))
	session_destroy();*/
	

	//$username = $_SESSION['username'];
	//$password = $_SESSION['password'];
// Defining Variables
//$username = isset($_GET['username'])? $_GET['username']: '';
if(isset($_REQUEST['login'])){
	if(empty($_GET['username'])){
		echo $_REQUEST['username'];
			
	} else {
	echo "Wrong Input";
}
}

/*$password = isset($_GET['pass'])? $_GET['pass']: '';
if(isset($_GET['login'])){
	echo $_REQUEST['pass'];
	
	

}
$type = isset($_GET['type'])? $_GET['type']: '';
if(isset($_GET['login'])){
	echo $_REQUEST['type'];
	
}*/


$client = new rabbitMQClient("rabbitmqphp_example/testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}


$request = array();
//$request['type'] = $type;
$request['username'] = $username;
$request['password'] = $password;
$request['message'] = $msg;
$response = $client->send_request($request); echo BRR;
//$response = $client->publish($request);

var_dump(isset($type));
var_dump(isset($username));
var_dump(isset($password));
var_dump(isset($msg));


//echo "client received response: ".PHP_EOL;



//print_r($response);
//echo $argv[0]." FINISH".PHP_EOL;

?>

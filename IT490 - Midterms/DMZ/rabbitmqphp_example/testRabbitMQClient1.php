#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}

$request = array();
//$request['type'] = "Login";
$http['username'] = "";
$http['emmail'] = "";
$http['password'] = "";
//$request['message'] = $msg;
$response = $client->send_request($http);
//$response = $client->publish($request);

if(isset($username)){
	echo $username;
}
else if(isset($email)){
	echo $email;
}

echo "client received response: ".PHP_EOL;
print_r($http);
echo "\n\n";

echo $argv[0]." END".PHP_EOL;


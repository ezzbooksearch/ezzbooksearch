<?php

//this function below works like a charm and it will keep appending
function LogError()
{

  ini_set('display_errors', 1);
  ini_set('log_errors', 1);
  ini_set( 'error_log', dirname(__FILE__) . 'log2.txt' );  
  error_reporting(E_ALL);

}
LogError();

//$var = LogError();
//echo $var;
$query = "select * from angularjs where id = $var";

wh_log("##### '" . date ('d-m-Y H:i:s'). "'Log Start ########");
wh_log("##### My variable id is : ='" .$var. "'########");
//wh_log("##### My query is : ='" .$query. "'########");
wh_log("##### END OF LOG ########");
wh_log("--------------------------------------");

echo "Log Generated Succesfully!.";

//common function

function wh_log($msg)
{
  $logfile = 'log/log_' .date('d-M-Y') . '.log';
  file_put_contents($logfile, $msg. "\n", FILE_APPEND);

}

?>


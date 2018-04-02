<?php
$results = shell_exec('GET http://googlebookapi.com/v1/volume/');
$arrayCode = json_decode($results);
var_dump($arrayCode);
?>

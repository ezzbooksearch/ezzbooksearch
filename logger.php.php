<?php
$file = 'log_test.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "This section is to be handled for error handling - append - on a RMQ Listener\n";
// Write the contents back to the file
file_put_contents($file, $current);
?>

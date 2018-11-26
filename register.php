<?php
$logFile = fopen('coffee_log.txt', 'a');
$user = $_SERVER['REMOTE_USER'];
$time = date("U");
$logString = $user . " " . $time . "\n";
fwrite($logFile, $logString);
header('Location: ' . '.?msg=Coffee registered!');
die();
?>

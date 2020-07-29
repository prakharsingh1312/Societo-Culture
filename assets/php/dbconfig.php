<?php
	session_start();
	$dbHost = "host";
	$dbDatabase = "database";
	$dbPasswrod = "password";
	$dbUser = "Hackowasp";


	$dbconfig = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase);
?>

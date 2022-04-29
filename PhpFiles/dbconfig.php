<?php

$DB_user = "root";
$DB_pass = "Password1";

$db = "mysql:host=localhost;dbname=test";

try 
{
	$db = new PDO($db, $DB_user, $DB_pass);
}
catch(PDOException $e){
	$error_message = $e->getMessage();
	echo $error_message;
	exit();
}
	

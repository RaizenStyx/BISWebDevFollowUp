<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

$DB_user = "root";
$DB_pass = "Password1";

$dsn = "mysql:host=localhost;dbname=test";

try {
	$db = new PDO($dsn, $DB_user, $DB_pass);
	//echo "conntected";
}catch(PDOException $e){
	$error_message = $e->getMessage();
	echo $error_message;
	exit();
}
	
	
?>
    <h1>Search through DB</h1>
    <form action="fnPHP.php" method="post" role="search" id="form"> 
        <input type="search" id="fnQuery" name="fnQuery"
        placeholder="Search First Name"
        aria-label="Search through site content">

        <button><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
		</form><br/>
	 
		<form action="lnPHP.php" method="post" role="search" id="form"> 
        <input type="search" id="lnQuery" name="lnQuery"
        placeholder="Search Last Name"
        aria-label="Search through site content">

        <button><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
		</form><br/>
		
		<br/><br/><br/>
		<h3>Capitalize</h3>
		<form action="Capitalize.php" method="post" id="form"> 
        <input class="single" type="search" id="capitalize" name="capitalize"
        aria-label="Search through site content"
		placeholder="Enter a string">
		<button><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
		</form><br/>
		
		<h3>MaxChar</h3>
		<form action="MaxChar.php" method="post" id="form"> 
        <input class="single" type="search" id="maxChar" name="maxChar"
        aria-label="Search through site content"
		placeholder="Enter a string">
		<button><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
		</form><br/>
		
		<h3>FizzBuzz</h3>
		<form action="FizzBuzz.php" method="post" id="form"> 
        <input class="single" type="search" id="fizzBuzz" name="fizzBuzz"
        aria-label="Search through site content"
		placeholder="Enter a whole number">
		<button><svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></button>
		</form>
		<p>*Must be an int</p><br/>
		
	
</body>
</html>
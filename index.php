<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
	<link rel="stylesheet" href="PhpFiles/styles.css">
</head>
<body>
	<?php include_once 'PhpFiles/dbconfig.php'; ?>

	<a href="Exercises/exersiseone.html" target="_blank">ExerciseOne</a>

	<a href="Exercises/exercisetwo.html" target="_blank">ExerciseTwo</a>
	
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
		
		<a href="PhpFiles/classPage.php">PHP Classes</a><br/>

		
	
</body>
</html>
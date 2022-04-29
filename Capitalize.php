<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitalize Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>This is my Capitalize php file.</h1>

<?php
 include_once 'testQuestions.php';
 $Capitalize = new Capitalize();
 $string = $_POST['capitalize'];
 $Capitalize->get($string);

?>

</body>
</html>

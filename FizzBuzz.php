<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>This is my FizzBuzz php file.</h1>

<?php
 include_once 'testQuestions.php';
 $FizzBuzz = new FizzBuzz();
 $limit = $_POST['fizzBuzz'];
 $FizzBuzz->get($limit);

?>

</body>
</html>
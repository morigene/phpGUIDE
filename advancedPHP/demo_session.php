<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>This is demo of session  </title>
</head>
<body>
 <h1> Just Call a session</h1>
 <?php 
echo 'my favorite color is '.$_SESSION['favoritecolor'].'<br>';
echo 'my favorite  user is '.$_SESSION['username'];

 ?>
</body>
</html>
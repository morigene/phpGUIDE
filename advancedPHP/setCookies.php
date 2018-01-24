<?php
session_start();
// set a cookie 

//setcookie(name,value,expire,path,domain,httponly); all parameters are optional only name is required.

$cookie_name= 'user';
$cookie_value = "origene MUTUYIMANA";
setcookie($cookie_name,$cookie_value,time() + 60,'/');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
if(!isset($_COOKIE[$cookie_name])){

echo 'Cookie '.$cookie_name . 'is not set';
}else{

	echo 'cookie name is '.$cookie_name;
	echo '<br>';
	echo 'cookie value is '.$cookie_value.'<br>';
}
//check if a cookie is enabled.

if(count($_COOKIE) > 0 ){
	ECHO 'cookie is enabled';
}else{
	echo 'cookie is not enabled.';
}

echo '<br>';
echo $_SESSION['username'].'<br>';
echo 'My favorite color is '.$_SESSION['favoritecolor'];
?>
</head>
<body>
</body>
</html>

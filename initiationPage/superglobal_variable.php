<?php

$x = 9;
$y = 10;


function addition(){
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo 'addition of x + z ='.$z;
echo '<br>';
// $_SERVER.
echo 'host '. $_SERVER['HTTP_HOST'].'<br>';
echo 'ip address '. $_SERVER['REMOTE_ADDR'].'<br>';
echo 'user agent '.$_SERVER['HTTP_USER_AGENT'].'<br>';
echo 'script name '.$_SERVER['SCRIPT_NAME'] .'<br>';
echo 'http_referer '.$_SERVER['HTTP_REFERER'].'<br>';
echo 'php_self '. $_SERVER['PHP_SELF'].'<br>';
echo 'server name '.$_SERVER['SERVER_NAME'];

// $_REQUEST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name= htmlspecialchars($_REQUEST['firstname']);
	if(!empty($name)){
        echo $name;	
	}else{
		echo  'please enter a name ';
	}
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	Firstname:<input type="text" name="firstname"><br>
	<input type="submit" value="submit">
</form>
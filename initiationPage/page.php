<?PHP

$string = "this is my string ";

if(preg_match('/isno/', $string)){

echo 'Match found';

}else{

echo 'NOT Match found';

}

if(isset($_GET['username']) && !empty($_GET['username'])){

echo $_GET['username'];
}

$hello = 0;
while(0){

	echo 'wow';
}

?>
<br>
<form method="GET" action="page.php">
Name: <input type = "text" name="username" >
<br>
<input type="submit" name = "login" value=z"login"> 	

</form>

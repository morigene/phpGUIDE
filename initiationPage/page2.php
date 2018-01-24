<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 

if(isset($_POST['text']) && !empty($_POST['text'])){

$user_text  = $_POST['text'];
$replace    = $_POST['replace'];
$search     = $_POST['search'];
$string_replace = str_replace($search, $replace, $user_text);
$substring_replace= substr_replace($search, $replace, 3,3);
echo $user_text .'<br>';
echo $string_replace;
echo '<br>'.$substring_replace;
ECHO "<HR>";

}
	?>
</head>
<body>
<form method="POST" >
<textarea cols="7" rows="5" name="text"></textarea><br>
<label>search for</label> <br>
<input type="text" name="search">
<br>
<label >replace for</label>
<br>
<input type="text" name="replace">
<br>
<input type="submit" value="submit">

</form>
</body>
</html>
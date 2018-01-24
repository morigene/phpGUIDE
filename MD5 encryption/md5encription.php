<?php
if (isset($_POST['pass']) && !empty($_POST['pass'])) {
$passworod_hash = md5($_POST['pass']);
echo $passworod_hash;
$filename = "file.txt";
$handle = fopen($filename, 'a');
fwrite($handle, 'Pass---------- '.$passworod_hash);
fclose($handle);
/*$handle2 = fopen($filename, 'r');
$fread   = fread($handle2, filesize($filename));
fclose($handle2);*/
}
else{
	echo 'enter password';
}
?>
<form method ='post' action ='md5encription.php'> 
<input type="password" name="pass"><br><br>
<input type="submit" name="submit">
</form>

<?php 
$server = $_SERVER['SCRIPT_NAME'];
echo $server;
 if(isset($_POST['dice'])){

    $rand = rand(111,222);
 	echo $rand;
 }
echo "<br>";
echo 'process 1';
$browser = get_browser(null, true);
echo $browser['browser'];

if($browser != 'chrome')
{

	echo 'you are not using chrome';
}

 ?>
 <hr>
 <form method = "post" action="<?php echo $server; ?>">
 	
<input type="submit" name="dice">
 </form>
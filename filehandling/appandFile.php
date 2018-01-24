<?php
if(isset($_POST['name'])){
	$name = $_POST['name'];
 if(!empty($_POST['name'])){
    
    $handle = fopen("appande.txt" ,"a");
    fwrite($handle,$name."\n");
    fclose();
 }
 else{
    
    echo 'please fill the name';
 }

 $reading = file('appande.txt');

$count = 1;
 foreach($reading as $fname){

 	echo $fname;
 	if($count != count($reading)){
      
     echo ', ';
 	}
 	$count++;

 }

}
?>
<br>
<form action="appandFile.php" method="POST">
<label>Enter name:</label>
<br>
<input type="text" name="name">
<br>
<br>
<input type="submit">	

</form>

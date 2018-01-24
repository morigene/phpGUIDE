<?php
if(isset($_POST['submit']))
$SIZE= $_FILES['file']['size'];
$name= $_FILES['file']['name'];
$type= $_FILES['file']['type'];
$path= $_FILES['file']['tmp_name'];
$error= $_FILES['file']['error'];
$extension = strtolower(substr($name, strpos($name, '.')+1));
if(!empty($name)){
	$location = 'upload/';
	if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'gif'){
       if(move_uploaded_file($path, $location.$name)){
       	echo 'file uploaded';
       }
	}else{
		echo 'The file must be in type of jpg,jpeg, gif';
	}
}else{
	echo 'please insert the number';
}
?>
<form method="POST" enctype="multipart/form-data" action="uploadfile.php">
	<input type="file" name="file"><br><br>
	<input type="submit" name="submit">
</form>
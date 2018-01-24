<?php
if(isset($_POST['submit'])){

$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$max_size = 10152;
$type = $_FILES['file']['type'];
$temp_name = $_FILES['file']['tmp_name'];
$error     = $_FILES['file']['error'];
$extension =strtolower(substr($name, strpos($name, '.')+1));
if(!empty($name)){ 
$location = 'upload/';
//echo $temp_name;
//echo $name;
	if ($size <= $max_size) {
		if ($extension == 'jpg' && $extension ='jpeg' || $extension == 'pdf' || $extension =="mp4") {
			if(move_uploaded_file($temp_name, $location.$name)){
				echo 'file uploaded correctly';
             }
             else{

             	echo 'not uploaded';
             }
		}

		else{
			echo 'extension must be jpg,jpeg or pdf';
		}
	}
	else{
		 echo 'error in uploading, size must be less than 20MBs';
		}
// by summary 
//move_uploaded_file($_FILES['file']['tmp_name'], 'upload/sun');

}
else{
echo 'please upload the file'; 
}
}


?>

<form action = "uploadfile.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file"> <br><br>
	<input type="submit" name="submit">

</form>
<?php
function test_input($data){
htmlspecialchars($data);
trim($data);
stripslashes($data);
return $data;
}
$fullname = $email = $tel = $website = $text = $gender = "";
$error_fullname = $error_email = $error_tel = $error_gender = $error_text = $error_website="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['fullname'])){
     $error_fullname = 'The name must be filled';
        }
    else{
    	$fullname = test_input($_POST['fullname']);
    	if(!preg_match("/^[a-zA-Z ]*$/", $fullname)){
    		$error_fullname = 'only letters and white space';
    	}
    }
    if(empty($_POST['email'])){
    	$error_email = "The email must be filled";
    }else{
    	 $email  = test_input($_POST['email']);
    	 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = "Invalid email format"; 
    	 }
    }
    if(empty($_POST['website'])){
    	$error_website = '';
    }else{
    	$website = test_input($_POST['website']);
    	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
    		# code...
    		$error_website = 'write in format of url';
    	}
    }
    if(empty($_POST['tel'])){
        $error_tel = " The telephone must be filled";
    }else{
    	$tel = test_input($_POST['telephone']);
    	    }
    if(empty($_POST['gender'])){
    	$error_gender = 'Gender is required';
    }else{
       
    }
    if(isset($gender) && $gender=="male") {
         echo 'checked';
    }
     if(isset($gender) && $gender =='female') {
         echo 'checked';
    } else{
    	echo $error_gender;
    }
    echo 'Fullname:  '.$fullname.'<br>';
    echo 'email:  '.$email.'<br>';
    echo 'Telephone: '.$tel.'<br>';
    echo 'Website: '.$website.'<br>';
    echo 'Gender: '.$gender.'<br>';
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>validating form in php</title>
	<style type="text/css">
		h1{
			font-weight: bold;
			font-family: Algerian;
			color:green;
           }
          legend{
          	font-family:Comic Sans MS;
          	font-size: 25px;
          	color:red;
          }
          .error{
             color:#FF0000;
          	}          
	</style>
</head>
<body>
	<h1> Form validation</h1>

<form method="POST" action='<?php echo $_SERVER['PHP_SELF'];?>'>
	<fieldset style="width:40%">
		<legend>Validate form using php scrpt</legend>
		<table >
		<tr>
		    <td>Fullname:</td>
		    <td><input type="text" name="fullname"><span class="error"><?php echo $error_fullname; ?></span> </td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email"><span class="error"> <?php echo $error_email; ?></span></td>
		</tr>
		<tr>
			<td>Website:</td>
			<td><input type="text" name="website"><span class="error"> <?php echo $error_website; ?></span></td>
		</tr>
		<tr>
			<td>Tel:</td>
			<td><input type="tel" name="telephone"><span class="error"> <?php echo $error_tel; ?></span></td>
		</tr>
		<tr>
		   <td>Gender:</td>
		   <td>Male:<input type="radio" name="gender" value="male">
            &nbsp Female:<input type="radio" name="gender" value="female">
            <span class="error"> <?php echo $error_gender; ?></span>
			</td> 
		</tr>
		<tr>
			<td>Option:</td>
			<td>Maths:<input type="checkbox" name="maths"> &nbsp 
            Physics:<input type="checkbox" name="physcs">
            Chemistry:<input type="checkbox" name="chemistry">
            Biology :<input type="checkbox" name="biology">
			</td>
		</tr>
		<tr>
			<tr>
			<td colspan="2px"><textarea cols="40" rows="10" name="text"></textarea>
				<span class= "error"> <?php echo $error_text=""; ?></span></td>
		</tr>
			<td colspan="2"><input type="Submit" name="Submit"></td>
		</tr>	
</table>
</form>
	</fieldset>
	
</body>
</html>
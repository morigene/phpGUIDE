<?php

if (isset($_POST['submit'])) {
	$to  = $_POST['email'];
	$subject= $_POST['subject'];
	$headers= $_POST['headers']; 
	$body   = $_POST['body'];
	if (empty($email) && empty($subject) && empty($headers) ) {
		echo 'All field must filled';
	}
	else{
		
		if (mail($to , $subject , $body , $headers)) {
			# code...
			echo 'Email has been sent '.$to ;
		}
		else{
			echo 'Email failed to send';
		}
	}
}

?>
<form method="POST" action ="contactForm.php">
<label>Email to:</label> <br><br>
<input type="text" name="email">
<br>
<label>Subject:</label><br>
<input type="text" name="subject">
<br>
<label>Headers:</label>
<br>
<input type="text" name="headers">
<br>
<br>
<textarea cols="40" rows="15" name="body"></textarea>
<br><br>
<input type="submit" name="submit">


</form>
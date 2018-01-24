<?php

$to = 'orisoft52@gmail.com';
$subject = "this is an email testing in php";
$body ='origene is good in php now \n\n becuase is with God and phpacademy.org';
$headers = 'From:someone@phpacademy.org';
if(mail($to , $subject ,$body , $headers)){
echo 'Email has been sent.';
}
else{
echo 'There was an error sendint the mail';
}
?>
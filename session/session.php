<?php
session_start();
if (isset($_SESSION['username'])) {

   echo 'welcome  '.$_SESSION['username'];
}
else{

	echo 'please login';
}

$string = "My values and determination qualify me to be one of a part of One Acre Fund.

At  university and my real life, I used to be hard worker,honest,volunteer
,good at team work and innovator.I remember one time,one of our lecturers (Mr.KABERUKA Josheph) used 
to give assignment and be submitted for only fews days and deadline has to be respected, 
For this time I never missed for  deadline.Again, once upon time  at school, I and Yvette Iradukunda won innvation competition called
Business Idea challenges awards in AIP(African Innovation Prize).Our topic(Agri-healthcare) focused on how you can
improve the control of pets and diseases using mobile phone software.As I said I am hard working person. For example in datasystems ltd,I and my team was assigned by
to develop application platform for replacing the existing one in 3 months only.The plaform had packages and content as well but we achieve it.

So with my values, I believe that I will meet the One Acre Fund requirements.";
echo str_word_count($string);

?>
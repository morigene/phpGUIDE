<?php
error_reporting();
ini_set('error_reporting',E_ALL);

$i= 0 ;
while ( $i < 10){

echo 'hello'.'<br>';
$i++;
}

$count =1 ;
do{
echo 'this will show first';
}
while(0);
echo '<br>';
for($count = 10 ; $count >0; $count--){
echo "hello word <br>";
}

$number = 3;

switch($number){

case 1:
  echo 'one';
break;

case 2:
  echo 'two';
break;

case 3:
  echo 'three';
break;

default:
   echo 'No number is here'; 
break; 
}
myName();
//function in php
//-----------------------------------------------------------------
function myName(){
echo 'hello my name origene';
}
$number1 ;
$number2 ;
function add($number1,$number2){

echo  $number1 + $number2;

}
echo "<br>"."The function of sum is:";
add(22,10);
echo "<br>";

function returnAdd($number1 , $number2){

$result = $number1 + $number2;
return $result;
}
echo returnAdd(10,20) + 23 ;
$user_ip = $_SERVER['REMOTE_ADDR'];
echo "<br>".$user_ip;
$string = 'This is my story ';
$stringT = str_word_count($string ,1 , '.');
echo "<br>".$stringT;
print_r($stringT);
$text = "myweather33138332983282382382jlhgytyid";
$string_shuffled = str_shuffle($text)."</ br>";
echo $string_shuffled;
echo "</  br>";
/*$sting_slashes = 'this is string and image <img src ="hello.jpg">';
$string_slashes = htmlentities(addslashes($sting_slashes));
*/
$food = array('ibijumba','imyumbati','amateke');
print_r($food);
echo "<br>";
print $food[1];

$drink = array('muhanda'=> 'soda','murego'=>'apple');
echo $drink['murego'];
/*
healthy
-------------------------------------
vegetable
salade
paste
unhealth
------------------------------------
pizza
humberger


*/

$food_2 = array('health' =>array('vegetable','salade','unhealth'),'unhealth' => array('pizza','humberger','eggs'));
echo $food_2['health']['1']."<br>";

foreach( $food_2 as $element => $inner_element ){

	echo $element.'<br>'."----------------------------------------".'<br>';
 foreach($inner_element as $items){

 	echo $items.'<br>';
 }

}
echo "<br>"."-----------------------------------------------------";
include 'header.inc.html';
include 'anotherpage.php';
echo $name;


?>
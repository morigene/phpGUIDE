<?php

$filename = "explode.txt";
$handle_write = fopen($filename, "w");
fwrite($handle_write,'Alex, Mushwahili, Mukamana,Mujyemana');
fclose($handle_write);
$handle  = fopen($filename ,"r");
$fdetain = fread($handle , filesize($filename));
$explode = explode(',', $fdetain);
foreach($explode as $name){

echo $name . "<br>";

}
?>
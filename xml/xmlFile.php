<?php


$xml = simplexml_load_file('xmpFile.xml');
 foreach($xml->producer as $prod){

     echo $prod->name .'is '.$prod->age.'<br>';
 }

 $xml2 = simplexml_load_file('anotherXmlFile.xml');
 foreach($xml2->car as $ca){
     echo $ca->name ."and its model is".$ca->model .'<br>';
 } 

?> 
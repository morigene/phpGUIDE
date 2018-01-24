<?php

require 'part_2_constructor.php';
require 'pigeon.php';
// learning a simple  constructor 
$person = new person('MUTUYIMANA Orignee ', 25);
echo $person->sentence();
echo '<br>';

// learning inhertance from bird_inhertance.php file 
$bird  = new bird(true , 2);
echo 'Bird '.$bird->canFly(). '<br>';
echo "Bird has ".$bird->getLegCount(2) . ' legs';

echo '<br>'. 'Pigeon property '.'<br>';
$pigeon  = new pigeon(true , 2);
echo 'pigeon '.$pigeon->canFly(). '<br>';
echo "pigeon has ".$pigeon->getLegCount(2) . ' legs';

if($pigeon->canFly()){
 
 echo '<br>'.'my pigeon can fily ';
}
?>
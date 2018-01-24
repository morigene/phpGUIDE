<?php

require 'pigeon.php';
echo '<br>'. 'Pigeon property '.'<br>';
$pigeon  = new pigeon(true , 2);
echo 'pigeon '.$pigeon->canFly(). '<br>';
echo "pigeon has ".$pigeon->getLegCount(2) . ' legs';

if($pigeon->canFly()){
 
 echo 'my pigeon can fily ';

}

?>
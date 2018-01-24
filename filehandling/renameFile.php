<?php
$filename = 'filename.txt';
$rand     =rand(10000,99999);
if(rename($filename, $rand.'.txt')){

    echo 'successful renamed';
}

else {

	echo 'file not exist';
}
?>
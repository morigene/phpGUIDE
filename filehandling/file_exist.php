<?php

$filename = "appande.txt";
if(file_exists($filename)){

	echo 'File already exist';
}
else{

	echo 'File not exist';
	$handle = fopen($filename, 'w');
	fwrite($handle, 'origene is good');
	fclose($handle);
}

?>
<?php
$filename = 'file.txt';
$handle = fopen($filename, 'a');
fwrite($handle, 'Samuel likes tomatoes');
fclose($handle);

$handle = fopen($filename, 'r');
$readFile = fread($handle, filesize($filename));
echo $readFile;
echo fgets($handle);
fclose($handle);
// read single line


$handle = fopen($filename, 'r');
while(!feof($handle)){
	echo fgets($handle).'<br>';
}
fclose($handle);

?>
<?php
$filename = 'filetodelete.txt';
if (unlink($filename)) {
	# code...
	echo 'file delted';
}
else{

echo 'filenot exist';
}

?>
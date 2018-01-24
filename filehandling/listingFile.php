<?php
$directory = 'list_file';

if($handle = opendir($directory.'/')){

echo 'The looking inside directory \''."<strong>".$directory."</strong>" .'\'.'.'<br>';

while($file = readdir($handle)){

	
	if($file != '.' && $file != '..' ){

        echo '<a href =" '.$directory .'">'.$file.'</a> <br>'; 
	}
}
}

if (file_exists(filename)) {
	# code...
}

?>
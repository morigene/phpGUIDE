<?php
 $handle = fopen("origene file.txt","w");
fwrite($handle , 'alex'."\n");
fwrite($handle , 'mutuyimana origene'."");
fclose($handle);
echo "<br>".'written';
?>
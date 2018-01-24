<?php
// require if missing produce fatal error and (E_COMPILE_ERROR).In complex coding such as framework,CMS,OR COMPLEX PHP Application AND SCRIPT STOP ;
// include if missing produce warning E_WARNING; used when you want to show output even if file is missing AND SCRIPT CONTINUES

include 'timeanddate.php';

echo '<br>';
$sum = 9 + 10 ;
echo $sum;

require'timeanddate.php';

?>
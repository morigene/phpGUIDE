<?php


$time= time();
$time2 = date('D M Y @ H :i :s' , $time);
$time_modified = date('D M Y @ H :i :s' , strtotime('+ 3  week'));
echo 'my date and time is '.$time2;
echo '<br>'.'my time modified is '.$time_modified;
echo '<br>';

include'random.php';
if(isset($_POST['submit'])){

echo 'process';

}
?>

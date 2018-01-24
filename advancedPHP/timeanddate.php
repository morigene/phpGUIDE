<?php
// script showing time and date

/*l: show day in letter
Y: year in four digit
i:mininutes
H:hour,
h:hour 12  format
m:month 1-12
d:represent day 1-31
*/

// month in 1-12 format and day in 1-31 format
echo date('Y/m/d') . '   in digit format';
echo '<br>';
//month in january -december format and day in 
echo date('Y/M/D') . '   in letter format';
echo '<br>';
date_default_timezone_set('GMT').'echo ';
echo date('h:i:s');
//create time with function mktime

echo '<br>'."create time by mktime()";
$d = mktime(12 , 20 ,23, 11 ,23 ,2015);
echo date('Y-m-d h:i:sa' , $d);

echo '<br>'.'create time by strtotime(time)';
$d = strtotime('12:30:33pm  April 25 2013');
echo date('Y-m-d h:i:sa', $d);
echo '<br>'.'Next sunday '.'<br>';
$nextSunday = strtotime('+6 weeks');
echo date('Y-m-d');

?>
<?php
/* sorting  array    */

//sort in ascending order
echo 'Here is to sort ascending order '."<br>";
$sort_firstname =array('origene','samuel','Emmanuel','Eric','Nadine');
sort($sort_firstname);

foreach ($sort_firstname as $firstname)  {
	# code...
	echo $firstname.'<br>';
}
//sort in descending order
$sort_firstname =array('origene','samuel','Emmanuel','Eric','Nadine');
rsort($sort_firstname);
echo 'Here is to sort in descinding order'.'<br>';
foreach ($sort_firstname as $firstname)  {
	# code...
	echo $firstname.'<br>';
}
// sorting according to value in ascending order
$age = array('origene' =>23 ,'samuel' =>25, 'Emmanuel'=>65,'Eric'=>50 );
asort($age);
echo'Here is to sort according values in ascending order'.'<br>';
foreach ($age as $key => $value) {
	# code...
	echo  'The key '.$key .'=>'.'value'.$value.'<br>';
}
// sorting according value in descending order.
$age = array('origene' =>23 ,'samuel' =>25, 'Emmanuel'=>65,'Eric'=>50 );
arsort($age);
echo'Here is to sort according value in descending order'.'<br>';
foreach ($age as $key => $value) {
	# code...
	echo  'The key '.$key .'=>'.'value'.$value.'<br>';
	}
// sorting according to key in ascending order;
$age = array('origene' =>23 ,'samuel' =>25, 'Emmanuel'=>65,'Eric'=>50 );
ksort($age);
echo'Here is to sort according to key in ascending order'.'<br>';
foreach ($age as $key => $value) {
	# code...
	echo  'The key '.$key .'=>'.'value'.$value.'<br>';
}
$age = array('origene' =>23 ,'samuel' =>25, 'Emmanuel'=>65,'Eric'=>50 );
krsort($age);
echo'Here is to sort according to key in descending order'.'<br>';
foreach ($age as $key => $value) {
	# code...
	echo  'The key '.$key .'=>'.'value'.$value.'<br>';
}


?>
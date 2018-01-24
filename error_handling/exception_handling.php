<?php
$number = 2;
function checkNum($data){

	if($data > 3){

		throw new Exception('Vualue must be 3 or below');
	}

	return true;
}
try{

if(checkNum(9)){

	echo 'Number   is 3 or below';
}

}catch(Exception $e){

echo 'Message '.$e->getMessage();
}
?>
<?php
//include 'random.php';
include'remote_blocked_ipaddress.php';
/*if (isset($_POST['submit'])) {
	
	echo 'process 2';
}*/
foreach($ip_blocked as $ip){

if ($ip == $ip_address) {
	die('<strong>'."The ip address".'</strong>'.$ip_address .'is blocked');
} 

}
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forward_client = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_address = $_SERVER['REMOTE_ADDR'];
if(!empty($http_client_ip)){

$ipAddress = $http_client_ip;
}
else if(!empty($http_x_forward_client)){

	$ipAddress = $http_x_forward_client;
}
else{

	$ipAddress = $remote_address;
}

echo $ipAddress;
?>

<h1> Welcome papa</h1>
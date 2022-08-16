<?php

//$ip_address = $_SERVER['REMOTE_ADDR'];

//echo $ip_address;




//https ip address method

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_ip = $_SERVER['HTTP_X_FORWARDED_IP'];
$remote_addr = $_SERVER['REMOTE_ADDR'];


if (!empty ($http_client_ip)) {
	$print_ip = $http_client_ip;
} elseif (!empty($http_x_forwarded_ip)) {
	$print_ip = $http_x_forwarded_ip;
}else {
	$print_ip = $remote_addr;
}

echo $print_ip;


?>
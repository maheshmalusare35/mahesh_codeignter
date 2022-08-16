<?php
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip(){
	$string = 'your ip address is: '.$user_ip;
	echo $string;
}
?>
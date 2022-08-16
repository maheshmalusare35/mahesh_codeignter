<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$database_name = 'mahesh';
 
$conn = mysqli_connect($server_name ,$user_name, $password, $database_name);
if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}else{
	echo 'connection successfully';
}

?>
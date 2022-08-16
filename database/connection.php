<?php

$host_name = 'localhost';
$user_name = 'root'; 
$password = '';
$databasename = 'mahesh';

 $conn = new mysqli($host_name,$user_name,$password,$databasename);

if ($conn->connect_errno) {
 echo"Connect failed: %s<br />", $mysqli->connect_error;
}else{
	//echo "connection successfully ";
}

?>
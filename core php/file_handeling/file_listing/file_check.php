<?php

$file_name = 'first1.txt';

if (file_exists($file_name)) {
	echo 'file exist';
}
else{
	echo 'file not exist';
}
?>
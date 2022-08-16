<?php
/*
$delete_file = 'file_delete.txt';

if (@unlink($delete_file)) {
	echo 'The file '.$delete_file.' has been deleted.';
}
else{
	echo 'The file not deleted';
}
*/

//$rename_file = 'file_register.txt';
//$rand = rand(123456789,987654321);


if (@rename('file_register.txt','123.txt')){
	echo 'the file has been renamed';
}
else{
	echo 'file has not renamed';
}
?>
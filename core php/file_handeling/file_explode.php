<?php
$newfilename = 'new_file.txt';
$handle = fopen($newfilename, 'r');
$file_next_explode = fread($handle, filesize($newfilename));

$names_array = explode(',', $file_next_explode);
print_r($names_array);
?>
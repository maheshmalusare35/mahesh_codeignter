<?php

function hit_count(){
	$file_name = 'hit_counter.txt';

	$handle = fopen($file_name, 'r');
	$current = fread($handle, filesize($file_name));
	fclose($handle);

	 $current ++;

	$handle = fopen($file_name, 'w');
	fwrite($handle, $current_new);
	fclose($handle);




}

?>
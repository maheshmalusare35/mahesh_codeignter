<?php

$offset = 0;

$find = 'new';
$find_length = strlen($find);

$string = 'this is the new work for new employee';

//$string_pos = strpos($string,$find);

while ($string_pos = strpos($string,$find,$offset)) {
	echo '<strong>'.$find.'<strong> found at '.$string_pos. '<br>';
	$offset = $string_pos + $find_length;
}

?>
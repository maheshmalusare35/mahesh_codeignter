<?php

$find = array('is','th');
$replace = array('IS','Th');
$string = 'this is the new world.';

$new_string = str_replace($find, $replace, $string);

echo $new_string;

?>
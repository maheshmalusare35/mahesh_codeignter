<?php

$string = 'this part don\'t search. this part search.';

$string_rep = substr_replace($string, 'alex', 29 , 4);

echo $string_rep;

?>
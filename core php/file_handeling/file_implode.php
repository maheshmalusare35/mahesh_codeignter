<?php

$array = array('sam','mahesh','alex');

rsort($array);

$new_array = implode(',', $array);



print_r($new_array);

/*
$terms = explode(";", "banana;apple;lemon");
rsort($terms);
$sorted_terms = implode(";", $terms);

echo $sorted_terms;
*/
?>
<?php

$a ='hello to everyone';

if (preg_match('/to/', $a)) {
	echo 'match found';
} else {
	echo 'not matched';
}


?>
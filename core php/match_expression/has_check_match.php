<?php


function has_space($string){
 if (preg_match('/ /', $string)) {
 	return true;
 } else {
 	return false;
 }
 
}

$string = 'this is the new task to doing for a team';


if (has_space($string)){
	echo 'at least one space';
}
else{
	echo 'no space';
}
?>
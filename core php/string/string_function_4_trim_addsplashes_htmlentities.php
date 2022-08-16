<?php
//trim 
/*$string = '     This is new world.   ';

$string_new = rtrim($string);

echo $string_new; */

//add slash
/*$string = 'the new machine to work.';

$string_slashes = addslashes($string);

echo $string_slashes;
*/

//htmlentities

$string = 'the new <image href="image.png">';

$string_new = htmlentities($string);

echo $string_new;

?>
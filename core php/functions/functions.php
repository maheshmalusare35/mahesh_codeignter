<?php

//basic functions

// function MyName(){
// 	echo 'mahesh';
// }
//  echo 'My name is ';
//  MyName();


// functions with arguments
/*
$number1 = 11;
$number2 = 22;

function add($number1,$number2)
{
	echo $number1 + $number2;
}
 
 add($number1,$number2);
 */



 // functions with return value

 function add ($number1,$number2)
 {
 	$result = $number1 + $number2;
 	return $result;
 }

function div ($number1,$number2)
{
	$result = $number1 / $number2;
	return $result;
}


$output = div(add(10,10), add(5,5));
echo $output;
?>
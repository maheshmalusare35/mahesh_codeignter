<?php  
$time = time();
$time_date = date('d/m/y @ H:i:s', $time);
$time_date_new = date('d/m/y @ H:i:s',strtotime('+1 week')); 

echo $time_date.'current'.'<br>new'.$time_date_new;




$rand_function = rand(1000000,9999999);

echo '<br><br>'. $rand_function;


?>
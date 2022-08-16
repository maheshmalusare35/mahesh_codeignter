<?php

$a = array('healthy'=>array('vegetable','fruits','salad'),
			'unhealthy'=>array('pizza','ice cream','cold drink'));

foreach ($a as $key => $value) {
	echo $key.'<br>';
foreach ($value as $item) {
	echo $item.'<br>';
}
}

?>
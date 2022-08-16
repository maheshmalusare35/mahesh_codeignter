<?php

$xml = simplexml_load_file('example.xml');

//echo $xml->producer[1]->name.'';

foreach ($xml->producer as $producer) {
	echo $producer->name.' '.$producer->age.'<br>';
}

?>
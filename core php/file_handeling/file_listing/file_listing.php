<?php

$directory = 'C:\xampp\htdocs\mahesh_php\file_handeling\file_listing';


if ($handle = opendir($directory.'/')) {
	echo 'looking files\''.$directory.'\'<br>';

while ($file = readdir($handle)) {
	if ($file!='.' && $file!='..') {
		echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
	}
}


}


?>
<?php

// $new_file = fopen('new_file.txt','w');

// fwrite($new_file, 'alex');

if(isset($_POST['new_entry']))
{
	$new_add = $_POST['new_entry'];


	$new_file_handle = fopen('new_file.txt', 'a');
	fwrite($new_file_handle, $new_add."\n");
	fclose($new_file_handle);

	echo 'New member are: ';

	$file_read = file('new_file.txt');

	foreach ($file_read as $fname) {
		echo $fname.', '.'';
	}


}


?>


<!DOCTYPE html>
<html>
<head>
	<title>File handling</title>
</head>
<body>


<hr>

	<form action="file.php" method="POST">
		Add: <br><input type="text" name="new_entry"><br><br>
		<input type="submit" value="submit">
	</form>

</body>
</html>
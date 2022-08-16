<?php

if (isset($_POST['password'])  &&  !empty($_POST['password'])) {
	$password_new = md5($_POST['password']);

	$file = 'md_5_password.txt';
	$file_open = fopen($file, 'r');
	$file_new = fread($file_open, filesize($file));


	if ($password_new == $file_new) {
		echo 'password match';
	}
	else {
		echo ' password not match';
	}




}
else{
	echo 'Please fill the passsword';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="md5_test.php" method="POST">
	<input type="password" name="password">
	<input type="submit" value="Submit">
</form>

</body>
</html>
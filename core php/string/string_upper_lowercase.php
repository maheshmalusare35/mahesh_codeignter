<?php

if (isset($_POST['username']) && !empty($_POST['username'])) {
	$username = $_POST['username'];
	$user = strtoupper($username);
} 
echo $user;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="string_upper_lowercase.php" method="POST">
	Name:<input type="text" name="username">
	<input type="submit" value="submit">
</form>
</body>
</html>
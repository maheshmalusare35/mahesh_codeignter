<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="newsession.php" method="POST">
		Name:<input type="text" name="username"><br>
		Password:<input type="password" name="pass"><br>
		Email:<input type="email" name="email_em"><br>
		<input type="submit" value="submit">
	</form>

</body>
</html>
<?php

if (isset($_POST['username'])  && isset($_POST['email_em']) ) {
	$user_new = $_POST['username'];
	$email_new = $_POST['email_em'];

	echo 'Hii '.$user_new.' your email is '.$email_new;

}else{
	echo 'please. fill the field';
}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<hr>

<form action="contact_form.php" method="POST">
	Name: <input type="text" name="username" maxlength="10" required><br>
	Email: <input type="email" name="email_em" maxlength="25" required><br>
	<input type="submit" value="Submit">

</form>


</body>
</html>
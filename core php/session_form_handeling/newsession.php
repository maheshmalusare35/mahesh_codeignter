<?php

session_start();

if (isset($_POST['username']) && isset($_POST['email_em'])) {
	$user_name = $_POST['username'];
	$password = $_POST['pass'];
	$email = $_POST['email_em'];

	echo 'welcome '.$user_name. ' your email is '.$email;
	

}

session_destroy();

?>
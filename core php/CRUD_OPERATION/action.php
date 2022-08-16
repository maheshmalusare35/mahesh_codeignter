<?php

include 'connection.php';
	
if(isset($_POST['submit'])) 
{
	$username = $_POST['username'];
	$email = $_POST['email'];	
	$phone_no = $_POST['phone_no'];
	$password = md5($_POST['password']);

	$sql = "INSERT INTO admin_panel (username, email, phone_no, password) VALUES ('$username','$email', '$phone_no', '$password')";			

	if($conn->query($sql))
	{
		?>
		<script>
			alert("Record Inserted Succcessfully.....");
			location.replace('index.php');
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Oops!......Record Not Inserted.");
			location.replace('index.php');
		</script>
		<?php
	}
}




?>
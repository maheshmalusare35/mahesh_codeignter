<?php 
//database connection
include '../database/connection.php';

// if (isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']))
if(isset($_POST['submit']))
{
	$user_name = $_POST['username'];
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];	

	if (!empty($user_name) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password))
	{
		// $check_email = "SELECT 'email' FROM 'login_register' WHERE 'email' = '$email'";
		// $emqil_query = mysqli_query($check_email);
		// if (mysqli_num_rows($email_query)==1) {
		// 	?>
			<script type="text/javascript">
		// 	 	alert("Email is already present");	
		// 	    location.replace("register.php");		 	
		// 	</script>
		 	<?php
		// }else{

		// }
		$sql = "INSERT INTO `login_register`(`username`, `firstname`, `lastname`, `email`, `password`) VALUES ('$user_name','$first_name','$last_name','$email','$password')";
		if ($conn->query($sql)) 
		{
			?>
			<script type="text/javascript">
			 	alert("Register Successfully");	
			 	//location.replace("register.php");		 	
			</script>
			<?php
		}else
		{
			?>
			<script type="text/javascript">
			 	alert("Not Register Successfully");
			 	location.replace("register.php");	
			</script>
			<?php
		}

	}else
	{
		?>
		<script type="text/javascript">
		 	alert("Please fill the field");
		 	location.replace("register.php");	
		</script>
		<?php
	}
}
?>
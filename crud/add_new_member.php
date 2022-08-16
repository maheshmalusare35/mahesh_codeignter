<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($email) && !empty($phone_no) && !empty($password)) {

		$sql = "INSERT INTO admin_panel (username,email,phone_no,password) VALUES('$username','$email','$phone_no','$password')";
		if ($conn->query($sql)) {
			?>
				<script type="text/javascript">
					alert("Record Inserted Successfully");
					location.replace('index.php');
				</script>
			<?php
		} 
		else{
			?>
				<script type="text/javascript">
					alert("Record Not Inserted");
					location.replace('index.php');
				</script>
			<?php
		}
		
	}
	else{
		?>
		<script type="text/javascript">
			alert("Please fill all field...");
			location.replace('index.php');
		</script>
		<?php
	}

}
?>
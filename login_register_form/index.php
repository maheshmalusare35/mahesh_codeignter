<?php 
//database connection
include '../database/connection.php';
if(isset($_POST['submit']))
{
	$user_name = $_POST['username'];
	$password = $_POST['password'];	

	if (!empty($user_name) && !empty($password))
	{
		

	}else
	{
		?>
		<script type="text/javascript">
		 	alert("Please fill the all field");
		 	location.replace("index.php");	
		</script>
		<?php
	}
}
?>
<!doctype html>
<html lang="en">
    <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	    <title>Login Page</title>
    </head>
    <body>
    	<div class="container-fluid p-2 mx-auto">
    		<div class="align-items-center">
    			<div class="mx-auto col-md-6 border border-1 rounded-3 p-4 bg-light">
    				<div class="d-grid gap-2 col-6 mx-auto">
    					<h1 class="mx-auto">Login form</h1>
    				</div>
    				<form action="index.php" method="POST">  					
	    				<div class="mb-3">
							<label for="exampleFormControlInputusername" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInputPassword" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
  							<button class="btn btn-primary" type="submit" name="submit">Sign In</button>
    						<a href="register.php" class="mx-auto">If you not yet register....sign up here</a>
						</div>
					</form>
    			</div>    			
    		</div>
    	</div>    

	    <!-- Optional JavaScript; choose one of the two! -->

	    <!-- Option 1: Bootstrap Bundle with Popper -->
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
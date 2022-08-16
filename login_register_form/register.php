<!doctype html>
<html lang="en">
    <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	    <title>Register Page</title>
    </head>
    <body>
    	<div class="container-fluid p-2">
    		<div class="align-items-center">
    			<div class="mx-auto col-md-6 border border-1 rounded-3 p-4 bg-light">
    				<div class="d-grid gap-2 col-6 mx-auto">
    					<h1 class="mx-auto">Register form</h1>
    				</div>
    				<form action="register_new.php" method="POST">
    					<div class="mb-3">
							<label for="exampleFormControlInputusername" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" id="username">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInputFirstname" class="form-label">Firstname</label>
							<input type="text" class="form-control" name="firstname" id="firstname">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInputLastname" class="form-label">Lastname</label>
							<input type="text" class="form-control" name="lastname" id="lastname">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInputemail" class="form-label">Email</label>
							<input type="email" class="form-control" name="email" id="email">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInputPassword" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
  							<!-- <button class="btn btn-primary" type="button" name="submit">Sign Up</button> -->
  							<input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
    						<a href="index.php" class="mx-auto">If you alredy register....sign in here</a>
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
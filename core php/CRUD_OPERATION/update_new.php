<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD_OPERATION</title>
  </head>
<body>
	<div class="container-fluid align-items-center p-4 bg-light border border-1 rounded-3 col-md-6">
	<!-- form start -->
			<form action="update.php" method="GET">

				<!--id no-->
				<div class="mb-3">
					<label for="exampleInputid" class="form-label" >Id_no:</label>
					<input type="text" class="form-control" name="id" value="" required/>
				</div>

		        <!-- Name field -->
					<div class="mb-3">
					    <label for="exampleInputname" class="form-label">Name:</label>
					    <input type="name" class="form-control" name="username" required>
				    </div>

				    <!-- email field -->
					<div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" required>					   
					</div>

					<!-- phone_no field -->
					<div class="mb-3">
					    <label for="exampleInputphone" class="form-label" >Phone_no:</label>
					    <input type="text" class="form-control" name="phone_no" maxlength="10" required>
					</div>

					<!-- button field -->
					<div class="d-grid gap-2 col-6 mx-auto mb-3">
		              <button type="submit" name="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Update
		              </button>
		            </div>            
	        </form>
	    </div>
</body>
</html>
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
   <div class="container-fluid">
      <div class="align-items-center">
        <div class="col-md-8 mx-auto shadow-lg p-4 bg-light border border-1 rounded-3"> 
            <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 		 Add New member
		</button> <br><br>


<!-- Fetch data into a table -->

 <table class="table table-bordered table-striped table-hover text-center">
	<thead>
		<th class="p-1">Id</th>
		<th class="p-1">Username</th>
		<th class="p-1">Email</th>
		<th class="p-1">Phone_no</th>
		<th class="p-1">Edit</th>
		<th class="p-1">Delete</th>
	</thead>	
	 <tbody>
		 <?php
			$displayquery = "SELECT * FROM admin_panel";
			 $querydisplay = mysqli_query($conn,$displayquery);                 
			  while ($result = mysqli_fetch_assoc($querydisplay)) {
			  	$id = $result['id'];
			  	$username = $result['username'];
			  	$email = $result['email'];
			  	$phone_no = $result['phone_no'];
	     echo '<tr>
		     	<td>'.$id.'</td>
				<td>'.$username.'</td>		
				<td>'.$email.'</td> 
				<td>'.$phone_no.'</td>
		        <td><a href="update.php?updateid='.$id.' " class="btn btn-primary">Edit</a></td>
		        <td><a href="delete.php?deleteid='.$id.' " class="btn btn-primary">Delete</a></td>                                    
	        </tr>';

	      
	           }
	       ?>
      </tbody>
</table>
          
        </div>
      </div>
    </div>



<!-- Modal for add new member -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_new_member.php" method="POST">
          	<div class="mb-3">
          		<div class="mb-3">
			  <label for="exampleFormControlusername" class="form-label">Username:</label>
			  <input type="text" class="form-control" name="username" id="username">
			</div>			
			<div class="mb-3">
			  <label for="exampleFormControlemail" class="form-label">Email address:</label>
			  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlphone_no" class="form-label">Phone no:</label>
			  <input type="text" class="form-control" name="phone_no" id="phone_no" maxlength="10">
			</div>	
			<div class="mb-3">
			  <label for="exampleFormControlpassword" class="form-label">Password:</label>
			  <input type="password" class="form-control" name="password" id="password">
			</div>		
			<div class="d-grid gap-2 col-6 mx-auto mb-3">
              <button type="submit" name="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Add Member</button>
            </div>            
          </form>
      </div>      
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
   
  </body>
</html>
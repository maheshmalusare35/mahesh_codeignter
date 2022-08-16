<?php
	include 'connection.php';
	session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD_OPERATION</title>
  </head>
<body>  
<div class="container-fluid p-2">

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content p-2">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      	<!-- form start -->
			<form action="action.php" method="POST">
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

				<!-- password field -->
				<div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Password</label>
				    <input type="password" class="form-control" name="password" required>
				</div>	

				<!-- button field -->
				<div class="d-grid gap-2 col-6 mx-auto mb-3">
		            <button type="submit" name="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Submit
		            </button>
		           </div>            
	        </form>
	    </div>
	  </div>
	</div>
</div>


<!-- Update form -->
<div class="container-fluid p-2">

	<!-- Modal -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content p-2">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Update Member Data</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      	<!-- form start -->
			<form action="update.php" method="POST">

				<!--id no-->
				<div class="mb-3">
					<label for="exampleInputid" class="form-label" >Id_no:</label>
					<input type="text" class="form-control" name="id" id="record_id" value="" required/>
				</div>

		        <!-- Name field -->
					<div class="mb-3">
					    <label for="exampleInputname" class="form-label">Name:</label>
					    <input type="name" class="form-control" name="username" id="username" required>
				    </div>

				    <!-- email field -->
					<div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="email" required>
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>

					<!-- phone_no field -->
					<div class="mb-3">
					    <label for="exampleInputphone" class="form-label" >Phone_no:</label>
					    <input type="text" class="form-control" name="phone_no" id="phone_id" maxlength="10" required>
					</div>

					<!-- button field -->
					<div class="d-grid gap-2 col-6 mx-auto mb-3">
		              <button type="submit" name="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Update
		              </button>
		            </div>            
	        </form>
	    </div>
	  </div>
	</div>
</div>



<!-- delete data -->

<form action="delete.php" method="GET">
	
</form>
<!-- <div class="container-fluid p-2"> -->

	<!-- Modal -->
	<!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content p-2">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Delete Member Data</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div> -->
	      	<!-- form start -->
			<!-- <form action="delete.php" method="GET"> -->
		        <!-- Name field -->
					<!-- <div class="mb-3">
					    <label for="exampleInputname" class="form-label">Name:</label>
					    <input type="name" class="form-control" name="username" required>
				    </div> -->

				    <!-- email field -->
					<!-- <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" required>
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div> -->

					<!-- phone_no field -->
					<!-- <div class="mb-3">
					    <label for="exampleInputphone" class="form-label" >Phone_no:</label>
					    <input type="text" class="form-control" name="phone_no" maxlength="10" required>
					</div> -->

					<!--id no-->
					<!-- <div class="mb-3">
					    <label for="exampleInputid" class="form-label" >Id_no:</label>
					    <input type="text" class="form-control" name="id" value="" required/>
					</div> -->

					<!-- button field -->
					<!-- <div class="d-grid gap-2 col-6 mx-auto mb-3">
		              <button type="submit" name="submit" id="submitbtn" value="submit" class="btn btn-primary btn-lg">Delete
		              </button>
		            </div>  -->           
	           <!--  </form> -->
	   <!--  </div>
	  </div>
	</div> -->
<!-- </div> -->



<!-- Fetch table data -->

<div class="container-fluid">
    <div class="align-items-center">
        <div class="col-md-6 mx-auto shadow-lg p-4 bg-light border border-1 rounded-3">
        	<!-- Button trigger modal -->
        	<div class="p-2">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Add New Member
				</button>
			</div>
			<div class="table-responsive">
        	<table class="table table-bordered table-striped table-hover text-center">
        		<tr>
					<th class="p-2">Id</th>
					<th class="p-2">Username</th>
					<th class="p-2">Email</th>
					<th class="p-2">Phone No</th>
					<th class="p-2">Update</th>
					<th class="p-2">Delete</th>
				</tr>
				
					<?php
					$new_query = mysqli_query($conn,"SELECT * FROM admin_panel");

						foreach ($new_query as $row) {
						 	
						$row = mysqli_fetch_array($new_query);
								
						  // $id=$row['id'];	
						  // $username = $row['username'];	
						  // $email = $row['email'];		
						  // $phone_no =$row['phone_no'];
					?>

						<tr>
							<td class="p-2"><?php echo $row['id'];?></td>
							<td class="p-2"><?php echo $row['username'];?></td>
							<td class="p-2"><?php echo $row['email'];?></td>
							<td class="p-2"><?php echo $row['phone_no'];?></td>
							<td class="p-2"><a href="update.php? update_id='.$id.'" type="button">Edit</a></td>
							<td class="p-2"><a href="delete.php? delete_id='.$id.'" type="button">Delete</a></td>				
						</tr>
					<?php  }?>	
			</table>
			</div>
         </div>
    </div>
</div>
<!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Delete</button> -->
<!-- 
<button class="btn btn-primary" id="edit" onclick="openModal(<?= $row['id'] ?>)">Edit</button> -->
<!-- 
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Update</button> -->

<!-- heading -->
<!-- <h1>Admin panel</h1> 
 -->
<!-- <div class="container-fluid">
    <div class="align-items-center">
        <div class="col-md-6 mx-auto shadow-lg p-4 bg-light border border-1 rounded-3">
        
            <div class="d-grid gap-2 d-md-flex justify-content-end">
               <a href="index.html"><button type="button" class="btn-close"></button></a>
            </div>

		    <h1 class="text-center fw-bold mb-2">
		    	<span class="">Add New Member</span>
		    </h1>
		    <hr />

        </div>
    </div>
</div> -->

      
		
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	function openModal(id)
    	{

    		alert(id);
    	}
    </script>


  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url().'Assets/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

    <!-- multiple select -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    


    <title>Dashboard</title>
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DashBoard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>   

<div class="container mt-3 border border-3 shadow-lg bg-light rounded-3 col-lg-12">
	<!-- heading -->
	<h1 class="text-center m-1">Add User</h1>

	<div class="container">
	<form action="<?php echo base_url('index.php/User/add_user');?>" method="POST" enctype="multipart/form-data">
		<div class="row">
			<!-- Firstname -->
			<div class="mb-3 col">
			  <label for="firstname" class="form-label">Firstname:</label>
			  <input type="firstname" class="form-control" name="firstname" id="firstname">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('firstname');?>			 		
				</div>
			</div>

			<!-- Lastname -->
			<div class="mb-3 col">
			  <label for="lastname" class="form-label">Lastname:</label>
			  <input type="lastname" class="form-control" name="lastname" id="lastname">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('lastname');?>			 		
				</div>
			</div>
		</div>
		
		<div class="row">
			<!-- Email -->
			<div class="mb-3 col">
			  <label for="email" class="form-label">Email address:</label>
			  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('email');?>			 		
				</div>
			</div>
			<!-- Contact no -->
			<div class="mb-3 col">
			  <label for="contact_no" class="form-label">Contact No:</label>
			  <input type="contact_no" class="form-control" name="contact_no" id="contact_no" maxlength="10">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('contact_no');?>			 		
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Select one -->
			<div class="col">
				<label for="gender" class="form-label">Gender:</label>				
				<input type="radio" name="gender" value="Male"> Male
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="Transgender"> Transgender
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('gender');?>			 		
				</div>
			</div>
			<!-- Image -->
			<div class="mb-3 col">
  				<label for="image" class="form-label">Image</label>
 				<input class="form-control" type="file" name="image" id="image">
 				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('image');
				 	if(isset($error)){ echo $error;}?>			 		
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Select one -->
			<div class="mb-3 col">
				<!-- <label for="language"  class="form-label">Language</label>
				<select name="language[]" class="form-control multiple_select" multiple>
					<?php foreach($language_data as $lan){?>
						<option value=""><?php echo $lan->$language;?></option>
					<?php }?>
									    		   
				</select> -->
				<!-- <option>select Language</option> -->
					<!-- <option value="Marathi">Marathi</option>
				    <option value="Hindi">Hindi</option>
				    <option value="Gujarati">Gujarati</option>
				    <option value="English">English</option> -->
				<label for="language"  class="form-label">Language</label>
				<select class="form-select" name="language">
					<option selected>Select Language</option>
					<option value="Marathi">Marathi</option>
				    <option value="Hindi">Hindi</option>
				    <option value="Gujarati">Gujarati</option>
				    <option value="English">English</option>
				</select>

				<!-- Error message show -->
				 <div class="text-danger">
				 	<?php echo form_error('language');?>			 		
				</div>	
			</div> 
			<div class="mb-3 col">
				<!-- <label for="gender" multiple size="2" class="form-label">Language</label>
				<select class="form-select" aria-label="Default select example">
					<option value="Marathi">Marathi</option>
				    <option value="Hindi">Hindi</option>
				    <option value="Gujarati">Gujarati</option>
				    <option value="English">English</option>				   
				</select> -->
			</div>
			
		</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
  		        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  		        <!-- <input type="reset" name="reset" class="btn btn-primary" value="Reset"> -->
  		        <a href="<?php echo base_url('index.php/User/dashboard');?>" class="btn btn-primary">Back</a>
           </div>	

		
	</form>
</div>
</div>

<script type="text/javascript">
	$(".multiple_select").select2({
  // maximumSelectionLength: 2
});
</script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url().'Assets/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   <!--  datatable in javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
 <!-- multiple select -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  </body>

</html>
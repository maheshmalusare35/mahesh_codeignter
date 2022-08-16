<?php include 'header.php';?>
<div class="container mt-3 border border-3 shadow-lg bg-light rounded-3 col-lg-12">
	<div class="container">
	<form action="<?php echo base_url('index.php/Imageupload/store_image');?>" method="POST" enctype="multipart/form-data">
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
			  <label for="contactno" class="form-label">Contact No:</label>
			  <input type="contactno" class="form-control" name="contactno" id="contactno" maxlength="10">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('contactno');?>			 		
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Select one -->
			<!-- <div class="col">
				<label for="gender" class="form-label">Gender:</label>
				<select class="form-select" aria-label="Default select example" name="gender" id="gender">
					<option selected>Select Gender</option>
					<option value="Male">Male</option>
				    <option value="Female">Female</option>
				    <option value="Transgender">TransGender</option>
				</select> -->
				<!-- Error message show -->
				<!-- <div class="text-danger">
				 	<?php echo form_error('gender');?>			 		
				</div>
			</div> -->
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
				<label for="language"  class="form-label">Language</label>
				<select class="form-select" aria-label="Default select example" name="language" id="language" multiple size="2">
					<option>select Language</option>
					<option value="Marathi">Marathi</option>
				    <option value="Hindi">Hindi</option>
				    <option value="Gujarati">Gujarati</option>
				    <option value="English">English</option>				    		   
				</select>
				<!-- Error message show -->
				<!-- <div class="text-danger">
				 	<?php echo form_error('language');?>			 		
				</div>	
			</div> -->
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
           </div>	

		
	</form>
</div>
</div>

<?php include 'footer.php';?>
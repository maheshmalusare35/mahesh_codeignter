<?php include 'header.php';?>  

<div class="container mt-3 border border-3 shadow-lg bg-light rounded-3 col-lg-12">
	<!-- heading -->
	<h1 class="text-center m-1">Register</h1>

	<div class="container">
		<div class="container">		
    <?php if($register = $this->session->flashdata('register')):?>	
			<div class="row">
				<div class="col-lg">
					<div class="alert alert-success text-center">						
						<?php echo $register;?>						
					</div>
				</div>
			</div>		
      <?php endif;?> 
		</div>

	<form action="<?php echo base_url('index.php/User/register');?>" method="POST" enctype="multipart/form-data">
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
			<div class="col mb-3">
				<label for="register_type" class="form-label">Register Type:</label>			
				<input type="radio" name="register_type" value="User"> User
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('register_type');?>			 		
				</div>
			</div>
			<!-- Password -->
		<div class="mb-3 col">
			<label for="Password" class="form-label">Password:</label>
			<input type="password" class="form-control" name="password" id="password" maxlength="10">
			<!-- Error message show -->
			<div class="text-danger">
			 	<?php echo form_error('password');?>			 		
			</div>
			</div>
		</div>

		
			<div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
  		        <input type="submit" name="submit" class="btn btn-primary" value="Register">
  		        <!-- <input type="reset" name="reset" class="btn btn-primary" value="Reset"> -->
  		        <a href="<?php echo base_url('index.php/User/login');?>" class="btn btn-primary">Back</a>
           </div>	

		
	</form>
</div>
</div>
<?php include 'footer.php';?>
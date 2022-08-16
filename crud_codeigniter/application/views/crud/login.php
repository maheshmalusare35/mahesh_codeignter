<?php include 'header.php' ;?>

<div class="container mt-3 border border-3 shadow-lg bg-light rounded-3 col-lg-6">
	<!-- heading -->
	<h1 class="text-center m-1">Login</h1>
   
	<div class="container">
		 <?php if($check =$this->session->flashdata('check')){?>
		<div class="row col-lg alert alert-danger">
			<div class="text-center">
		<?php echo $check;?></div>	
	</div>
	<?php }?>
	</div>

	<div class="container">
	<form action="<?php echo base_url('index.php/User/login');?>" method="POST" enctype="multipart/form-data">
		
		
		<!-- Email -->
		<div class="mb-3">
			<label for="email" class="form-label">Email address:</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
			<!-- Error message show -->
			<div class="text-danger">
			 	<?php echo form_error('email');?>			 		
			</div>
		</div>
		<!-- Password -->
		<div class="mb-3">
			<label for="Password" class="form-label">Password:</label>
			<input type="password" class="form-control" name="password" id="password" maxlength="10">
			<!-- Error message show -->
			<div class="text-danger">
			 	<?php echo form_error('password');?>			 		
			</div>
			</div>
			<!-- Select one -->
			<div class="col mb-3">
				<label for="register_type" class="form-label">Register Type:</label>			
				<input type="radio" name="register_type" value="User"> User
				<input type="radio" name="register_type" value="Admin"> Admin
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('register_type');?>			 		
				</div>
			</div>

			<div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
  		        <input type="submit" name="submit" class="btn btn-primary" value="Login">     
  		        <a href="<?php echo base_url('index.php/User/register');?>" class="btn btn-primary">Register</a>
           </div>	

		
	</form>
</div>
</div>

<?php include 'footer.php';?>
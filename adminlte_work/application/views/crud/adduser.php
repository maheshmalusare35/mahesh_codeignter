<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php include 'sidebar.php';?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>	
  <div class="container mt-4 border-3 shadow-lg p-4">
   	<div>
       <form action="<?php echo base_url('Sample/add_register');?>" method="POST">
		
		
			<!-- Full name -->
			<div class="mb-3">
			  <label for="fullname" class="form-label">Full name:</label>
			  <input type="text" class="form-control" name="fullname" id="fullname">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('fullname');?>			 		
				</div>
			</div>

			<!-- Email -->
			<div class="mb-3 ">
			  <label for="email" class="form-label">Email address:</label>
			  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('email');?>			 		
				</div>
			</div>
			
			<!-- Password -->
			<div class="mb-3 ">
				<label for="Password" class="form-label">Password:</label>
				<input type="password" class="form-control" name="password" id="password" maxlength="10">
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('password');?>			 		
				</div>
			</div>

			<!-- Select one -->
			<div class=" mb-3">
				<label for="register_type" class="form-label">Register Type:</label>			
				<input type="radio" name="register_type" value="User"> User
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('register_type');?>			 		
				</div>
			</div>
		

		
			
  		        <input type="submit" name="submit" class="btn btn-primary" value="Add user"> 
  		       
  		        <a href="<?php echo base_url('Sample/admindashboard');?>" class="btn btn-primary">Back</a>	
  		       	        
           	

		
	</form>
     </div>
     
 </div>
    </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>







<?php include 'footer.php';?>

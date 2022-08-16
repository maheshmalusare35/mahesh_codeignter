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
                <h3 class="card-title">Education Details</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
   				<div>				

	<form action="<?php echo base_url('Sample/education_details');?>" method="POST" enctype="multipart/form-data">
		
      	<h3>12th details</h3>
      	<div class="row">
      		<!-- Board Name -->
      		<div class="mb-3 col">
	        	<label for="boardname" class="form-label">HSC Board name:</label>       		
	      		<input type="text" class="form-control" name="hscboardname" id="hscboardname">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hscboardname');?>          
	        	</div>
      		</div>
      		<!-- College Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC College Name:</label>       		
	      		<input type="text" class="form-control" name="hsccollegename" id="hsccollegename">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hsccollegename');?>          
	        	</div>
      		</div>		
      	</div>
      	<div class="row">
      		<!-- Percentage -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC Percentage:</label>       		
	      		<input type="text" class="form-control" name="hscpercentage" id="hscpercentage">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hscpercentage');?>          
	        	</div>	        	
      		</div>
      		<!-- Passing Year -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC Passing Year:</label>       		
	      		<input type="date" class="form-control" name="hscpassingyear" id="hscpassingyear">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hscpassingyear');?>          
	        	</div>
      		</div>
      	</div>		

      	<hr>
      	<h3>10th details</h3>
      	<div class="row">
      		<!-- Board Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Board name:</label>       		
	      		<input type="text" class="form-control" name="sscboardname" id="sscboardname">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('sscboardname');?>          
	        	</div>
      		</div>
      		<!-- school Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC School Name:</label>       		
	      		<input type="text" class="form-control" name="sscschoolname" id="sscschoolname">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('sscschoolname');?>          
	        	</div>
      		</div>		
      	</div>
      	<div class="row">
      		<!-- Percentage -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Percentage:</label>       		
	      		<input type="text" class="form-control" name="sscpercentage" id="sscpercentage">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('sscpercentage');?>          
	        	</div>
      		</div>
      		<!-- Passing Year -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Passing Year:</label>       		
	      		<input type="date" class="form-control" name="sscpassingyear" id="sscpassingyear">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('sscpassingyear');?>          
	        	</div>
      		</div>
      	</div>		

		<div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
            <div class="p-2">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 
            </div>
            <div class="p-2">   
                <a href="<?php echo base_url('Sample/userdashboard');?>" class="btn btn-primary">Back</a>
            </div>
        </div> 	
	</form>
            </div>
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

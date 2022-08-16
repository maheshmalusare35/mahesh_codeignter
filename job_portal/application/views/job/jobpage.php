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
                <h3 class="card-title">Job Details</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
   				<div>				

	<form action="" method="POST" enctype="multipart/form-data">
		
      	<h3 class="text-primary"><b>Job Details</b></h3>
      	<div class="row">
      		<!-- Job Type-->
      		<div class="mb-3 col">
	        	<label for="boardname" class="form-label">Job Type: <span class="text-danger">*</span></label>       		
	      		<!-- <input type="text" class="form-control" name="jobtype" id="jobtype"> -->
            <select class="form-control col" name="job_type">
              <option value="Full Time">Full Time</option>
              <option value="Part Time">Part Time</option>
              <option value="Internship">Internship</option>
            </select>
	       		<!-- Error message show --> 
	        	<div class="text-danger">
	          		<?php echo form_error('job_type');?>          
	        	</div>
      		</div>
      		<!-- Job preference-->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Job preference: <span class="text-danger">*</span></label>           
            <!-- <input type="text" class="form-control" name="jobtype" id="jobtype"> -->
            <select class="form-control col" name="job_preference">
              <option value="Fresher">Fresher</option>
              <option value="Experience">Experience</option>
            </select>
            <!-- Error message show --> 
            <div class="text-danger">
                <?php echo form_error('job_preference');?>          
            </div>
          </div>	
      	</div>

        <div class="row">
          <!-- Company Name -->
          <div class="mb-3 col">
            <label for="name" class="form-label">Company name:</label>           
            <input type="text" class="form-control" name="company_name" id="company_name">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('company_name');?>          
            </div>
          </div>
          <!-- Expeience -->
          <div class="mb-3 col">
            <label for="name" class="form-label">Experience Year:</label>           
            <!-- <input type="text" class="form-control" name="experience_year" id="experience_year"> -->
             <select class="form-control col" name="experience_year">
              <option value="1">1</option>
              <option value="2">2</option>
               <option value="3">3</option>
              <option value="4">4</option>               
              <option value="5">5</option>
               <option value="6">6</option>
              <option value="7">7</option>
               <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('experience_year');?>          
            </div>
          </div>
        </div>
        <div class="row">
           <!-- Job profile -->
          <div class="mb-3 col">
            <label for="name" class="form-label">Your Job profile:</label>           
            <input type="text" class="form-control" name="job_profile" id="job_profile">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('job_profile');?>          
            </div>
          </div>
        </div>        
		    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
            <div class="p-2">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 
            </div>
            <!-- <div class="p-2">   
                <a href="<?php echo base_url('Sample/userdashboard');?>" class="btn btn-primary">Back</a>
            </div> -->
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
 </div>

  
<?php include 'footer.php';?>

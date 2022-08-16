<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/navbar');?>
<?php $this->load->view('layout/sidebar');?>
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

	<form action="<?php echo base_url('Sample/education_details'); ?>" method="POST" enctype="multipart/form-data">

		<h3 class="text-primary"><b>Graduation</b></h3>
      	<div class="row">
      		<!-- Board Name -->
      		<div class="mb-3 col">
	        	<label for="boardname" class="form-label">University Name:</label>       		
	      		<input type="text" class="form-control" name="university_name" id="university_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('university_name');?>          
	        	</div>
      		</div>
      		<!-- College Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">College Name:</label>       		
	      		<input type="text" class="form-control" name="graduation_college_name" id="graduation_college_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('graduation_college_name');?>          
	        	</div>
      		</div>		
      	</div>
      	<div class="row">
      		<!-- Percentage -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">Grade:</label>       		
	      		<input type="text" class="form-control" name="graduction_grade" id="graduction_grade">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('graduction_grade');?>          
	        	</div>	    
	        	<div class="text-danger">(Note: grade must be out of 10)	</div>    	
      		</div>

      		
      		<!-- Passing Year -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">Graduation Passing Year:</label>       		
	      		<input type="date" class="form-control" name="graduction_passing_year" id="graduction_passing_year">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('graduction_passing_year');?>          
	        	</div>
      		</div>
      	</div>	
		<hr>
      	<h3 class="text-primary"><b>12th Details</b></h3>
      	<div class="row">
      		<!-- Board Name -->
      		<div class="mb-3 col">
	        	<label for="boardname" class="form-label">HSC Board name: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="hsc_board_name" id="hsc_board_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hsc_board_name');?>          
	        	</div>
      		</div>
      		<!-- College Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC College Name: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="hsc_college_name" id="hsc_college_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hsc_college_name');?>          
	        	</div>
      		</div>		
      	</div>
      	<div class="row">
      		<!-- Percentage -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC Percentage: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="hsc_percentage" id="hsc_percentage">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hsc_percentage');?>          
	        	</div>	        	
      		</div>
      		<!-- Passing Year -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">HSC Passing Year: <span class="text-danger">*</span></label>       		
	      		<input type="date" class="form-control" name="hsc_passing_year" id="hsc_passing_year">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('hsc_passing_year');?>          
	        	</div>
      		</div>
      	</div>		

      	<hr>
      	<h3 class="text-primary"><b>10th Details</b></h3>
      	<div class="row">
      		<!-- Board Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Board name: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="ssc_board_name" id="ssc_board_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('ssc_board_name');?>          
	        	</div>
      		</div>
      		<!-- school Name -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC School Name: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="ssc_school_name" id="ssc_school_name">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('ssc_school_name');?>          
	        	</div>
      		</div>		
      	</div>
      	<div class="row">
      		<!-- Percentage -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Percentage: <span class="text-danger">*</span></label>       		
	      		<input type="text" class="form-control" name="ssc_percentage" id="ssc_percentage">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('ssc_percentage');?>          
	        	</div>
      		</div>
      		<!-- Passing Year -->
      		<div class="mb-3 col">
	        	<label for="addres" class="form-label">SSC Passing Year: <span class="text-danger">*</span></label>       		
	      		<input type="date" class="form-control" name="ssc_passing_year" id="ssc_passing_year">
	       		<!-- Error message show -->
	        	<div class="text-danger">
	          		<?php echo form_error('ssc_passing_year');?>          
	        	</div>
      		</div>
      	</div>		
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
            <!-- Resume -->
        <div class="form-group col-md-6">
          <label for="exampleInputFile">Resume:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="resume" id="resume">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
               <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
            </div>
            <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('resume');
          if(isset($error)){ echo $error;}?>          
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

  
<?php $this->load->view('layout/footer');?>

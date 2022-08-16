<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/navbar');?>
<?php $this->load->view('layout/recruitersidebar/recsidebar');?>







<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
                <div>
            
			       <form action="<?php echo base_url('Sample/get_job_details'); ?>" method="POST"> 
                <h3 class="text-primary"><b>New Job Create</b></h3>
        <div class="row">
          <!-- Job Name -->
          <div class="mb-3 col">
            <label for="jobname" class="form-label">Job Name:</label>          
            <input type="text" class="form-control" name="job_name" id="job_name">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('job_name');?>          
            </div>
          </div>
          <!--Job description: -->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Job Description:</label>          
            <textarea type="textarea" rows="3" cols="4" class="form-control" name="job_description" id="job_description"></textarea>
            <!-- Error message show -->
            <div class="text-danger"> 
                <?php echo form_error('job_description');?>          
            </div>
          </div>             
        </div>
        <div class="row">          
           <!-- Job apply start data -->
          <div class="mb-3 col">
            <label for="jobname" class="form-label">Job Apply Start Date:</label>          
            <input type="date" class="form-control" name="job_apply_start_date" id="job_apply_start_date">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('job_apply_start_date');?>          
            </div>
          </div>

           <!-- Job apply end data -->
          <div class="mb-3 col">
            <label for="jobname" class="form-label">Job Apply End Date:</label>          
            <input type="date" class="form-control" name="job_apply_end_date" id="job_apply_end_date">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('job_apply_end_date');?>          
            </div>
          </div>
        </div>
                  
        </div>
        <!-- button -->      
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">           
                    <input type="submit" name="submit" value="Create Job" class="btn btn-primary">
                </div>                         
              </form>  
        
            
                </div>
             </div>	
            </div>            
          </div>          
        </div>        
      </div>     
    </section>     
  </div>
<?php $this->load->view('layout/footer');?>
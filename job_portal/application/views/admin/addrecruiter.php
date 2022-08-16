<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('layout/header');?>
<?php $this->load->view('layout/navbar');?>
<?php $this->load->view('layout/adminsidebar/adsidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add New Recruiter</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
              <div class="">

        <form action="<?php echo base_url('Sample/add_recruiter_data');?>" method="post">
        <!-- Full Name -->
        <div class="mb-3 col">
          <label for="fullname" class="form-label">Full Name:</label>
          <input type="text" class="form-control" name="fullname" id="fullname">
          <!-- Error message show -->
          <div class="text-danger">
            <?php echo form_error('fullname');?>          
          </div>
        </div>
        

        <!-- email -->
        <div class="mb-3 col">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" id="email">
          <!-- Error message show -->
          <div class="text-danger">
            <?php echo form_error('email');?>          
          </div>
        </div>

        <!-- password -->
        <div class="mb-3 col">
          <label for="password" class="form-label">Password:</label>
          <input type="password" class="form-control" name="password" id="password">
          <!-- Error message show -->
          <div class="text-danger">
            <?php echo form_error('password');?>          
          </div>
        </div>
      
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">           
            <input type="submit" name="submit" value="Register" class="btn btn-primary">
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
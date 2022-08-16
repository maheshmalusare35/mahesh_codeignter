<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recruiter Details</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <div class="content-wrapper p-4">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Please Filled the Below Details for Go Next Step</h3>
            </div>              
            <div class="card-body">
              <form action="<?php echo base_url('Sample/company_register_check');?>" method="POST"> 
                <h3 class="text-primary"><b>Company Details</b></h3>
        <div class="row">
          <!-- company Name -->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Company Name:</label>          
            <input type="text" class="form-control" name="company_name" id="company_name">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('company_name');?>          
            </div>
          </div>
          <!--Company Owner Name: -->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Company Owner Name:</label>          
            <input type="text" class="form-control" name="company_owner_name" id="company_owner_name">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('company_owner_name');?>          
            </div>
          </div>             
        </div>
        <div class="row">          
           <!--Company Email: -->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Company Email:</label>          
            <input type="email" class="form-control" name="company_email" id="company_email">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('company_email');?>          
            </div>
          </div> 
          <!--Company Phone No: -->
          <div class="mb-3 col">
            <label for="boardname" class="form-label">Company Phone No:</label>          
            <input type="text" class="form-control" name="company_phone_no" id="company_phone_no" maxlength="10">
            <!-- Error message show -->
            <div class="text-danger">
                <?php echo form_error('company_phone_no');?>          
            </div>
        </div>
                  
        </div>
        <!-- button -->      
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">           
                    <input type="submit" name="submit" value="Add Details" class="btn btn-primary">
                </div>                         
              </form>
            </div>            
          </div>           
        </div>          
      </div>        
    </div>      
  </section>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Register</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <!-- for alert messsage -->
      <!-- <div class="container">
        <?php if($this->session->flashdata('msg')):?>
          <div class="row">
            <div class="col-lg">
              <div class="alert alert-danger text-light">
                <?php echo $this->session->flashdata('msg');?>
              </div>
            </div>
          </div>
        <?php endif;?>
      </div> -->

      <form action="<?php echo base_url('Sample/register_check');?>" method="post">
        <!-- fullname -->
        <div class="input-group mb-1">
          <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>          
        </div>
        <div class="text-center text-danger">
          <?php echo form_error('fullname');?>
        </div>
        <!-- email -->
        <div class="input-group mb-1">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="text-center text-danger">
          <?php echo form_error('email');?>
        </div>
        <!-- password -->
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="text-center text-danger">
          <?php echo form_error('password');?>
        </div>
        <!-- register_type -->
        <div class="input-group mb-3">
          <label for="register_type" name="register" class="form-label">Register Type: </label>  
          <input type="radio" name="register_type" value="Job Seeker">Job Seeker
          <input type="radio" name="register_type" value="Recruiter">Recruiter          
        </div>
        <div class="text-center text-danger">
          <?php echo form_error('register_type');?>
        </div>        
        
      
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">           
            <input type="submit" name="submit" value="Register" class="btn btn-primary">
          </div>
      
      </form>

    
      <a href="<?php echo base_url('Sample/login_panel');?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->




<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
</body>
</html>

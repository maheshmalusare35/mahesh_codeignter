<?php include('header.php')?>
<div class="container mt-3 mb-3 border border-1 rounded-3 bg-light col-6 shadow-lg">
	<h1 class="text-center">Regiter Form</h1>
	<?php echo form_open('Admin/register_form_data');?>
	  <div class="mb-3">
	    <label for="username" class="form-label">Username:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'username','id'=>'username','placeholder'=>'Enter Username']);?><!-- for the value set in value attribute 'value'=>set_value('username') -->
	    <div><?php echo form_error('username');?></div>
	  </div>	  
	  <div class="mb-3">
	    <label for="firstname" class="form-label">Firstname:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'firstname','id'=>'firstname','placeholder'=>'Enter firstname']);?><!-- for the value set in value attribute 'value'=>set_value('username') -->
	    <div><?php echo form_error('firstname');?></div>
	  </div>
	  <div class="mb-3">
	    <label for="lastname" class="form-label">Lastname:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'lastname','id'=>'lastname','placeholder'=>'Enter lastname']);?><!-- for the value set in value attribute 'value'=>set_value('username') -->
	    <div><?php echo form_error('lastname');?></div>
	  </div>
	  <div class="mb-3">
	    <label for="email" class="form-label">Email:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'email','id'=>'email','placeholder'=>'Enter email']);?><!-- for the value set in value attribute 'value'=>set_value('username') -->
	    <div><?php echo form_error('email');?></div>
	  </div>
	  <div class="mb-3">
	    <label for="password" class="form-label">Password:</label>
	    <?php echo form_password(['type'=>'password','class'=>'form-control','name'=>'password','id'=>'password','placeholder'=>'Enter Password']);?>
	    <div><?php echo form_error('password');?></div>
	  </div>
	  <div class="d-flex gap-2 col-3 mx-auto mb-3">
  		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','name'=>'submit','id'=>'submit','value'=>'Submit']);?>
  		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','name'=>'reset','id'=>'reset','value'=>'Reset']);?>
  		<?php echo anchor('Admin/login','Sign In','class="link-class"');?>
	  </div>	 
	  <!-- <?php echo validation_errors();?> -->
</div>
<?php include('footer.php')?>	
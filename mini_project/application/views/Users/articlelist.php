<?php include('header.php')?>
<!-- <div class="container mt-3 mb-3 border border-1 rounded-3 bg-light col-6 shadow-lg">
	<h1 class="text-center">Admin Form</h1>
	<?php echo form_open('Admin/index_admin');?>
	  <div class="mb-3">
	    <label for="Username" class="form-label">Username:</label>	    
	    <?php echo form_input(['class'=>'form-control','name'=>'username','id'=>'username','placeholder'=>'Enter Username','value'=>set_value('username')]);?>
	    <div><?php echo form_error('username');?></div>
	  </div>
	  <div class="mb-3">
	    <label for="password" class="form-label">Password:</label>
	    <?php echo form_password(['type'=>'password','class'=>'form-control','name'=>'password','id'=>'password','placeholder'=>'Enter Password','value'=>set_value('password')]);?>
	    <div><?php echo form_error('password');?></div>
	  </div>
	  <div class="d-flex gap-2 col-3 mx-auto mb-3">
  		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','name'=>'submit','id'=>'submit','value'=>'Submit']);?>
  		<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','name'=>'reset','id'=>'reset','value'=>'Reset']);?>
	  </div>	  
</div> -->
<!-- for error message show -->
<!-- <?php echo validation_errors();?> -->
<?php include('footer.php')?>
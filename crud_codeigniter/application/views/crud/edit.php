<?php include 'header.php';?>
<div class="container mt-3 border border-3 shadow-lg bg-light rounded-3 col-lg-12">
	<!-- heading -->
	<h1 class="text-center m-1">Edit User</h1>
	<!-- form tag open -->
	<?php echo form_open('User/update/'.$edit->id,'class="mt-3"');?>
	<div class="row">
		<!-- Firstname -->
		<div class="mb-3 col">
		    <label for="firstname" class="form-label">Firstname:</label>	    
		    <?php echo form_input(['class'=>'form-control col-md-6','name'=>'firstname','id'=>'firstname','placeholder'=>'Enter firstname','value'=>set_value('firstname',$edit->firstname)]);?><!-- for the value set in value attribute 'value'=>set_value('firstname') -->
		    <div class="text-danger"><?php echo form_error('firstname');?></div>
		</div>
		<!-- Lastname -->
		<div class="mb-3 col">
		    <label for="lastname" class="form-label">Lastname:</label>	    
		    <?php echo form_input(['class'=>'form-control col-md-6','name'=>'lastname','id'=>'lastname','placeholder'=>'Enter lastname','value'=>set_value('lastname',$edit->lastname)]);?><!-- for the value set in value attribute 'value'=>set_value('lastname') -->
		    <div class="text-danger"><?php echo form_error('lastname');?></div>
		</div>
	</div>
	<div class="row">
		<!-- Email -->
		<div class="mb-3 col">
		    <label for="email" class="form-label">Email:</label>	    
		    <?php echo form_input(['class'=>'form-control col-md-6','name'=>'email','id'=>'email','placeholder'=>'Enter email','value'=>set_value('email',$edit->email)]);?><!-- for the value set in value attribute 'value'=>set_value('email') -->
		    <div class="text-danger"><?php echo form_error('email');?></div>
		</div>
		<!-- Contact no -->
		<div class="mb-3 col">
		    <label for="contact_no" class="form-label">Contact No:</label>	    
		    <?php echo form_input(['class'=>'form-control col-md-6','name'=>'contact_no','id'=>'contact_no','placeholder'=>'Enter contact no','maxlength'=>'10','value'=>set_value('contact_no',$edit->contact_no)]);?><!-- for the value set in value attribute 'value'=>set_value('contact_no') -->
		    <div class="text-danger"><?php echo form_error('contact_no');?></div>
		</div>
	</div>
	<!-- button -->
	<div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
  		<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','name'=>'submit','value'=>'Update']);?>
  		<?php echo anchor('User/dashboard','Back','class="link-class btn btn-primary"');?>
    </div>	
	<!-- form tag close -->
	<?php echo form_close();?>	
</div>
<?php include 'footer.php';?>
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
                <h3 class="card-title">Profile</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
   				<div>
   					
       
		 
		
					

			<form action="<?php echo base_url('Sample/profile_student');?>" method="POST" enctype="multipart/form-data">
		
		<div class="row">
			<!-- Contact no -->
			<div class="mb-3 col">
			  <label for="contact_no" class="form-label">Contact No:</label>
			  <input type="contact_no" class="form-control" name="contact_no" id="contact_no" maxlength="10">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('contact_no');?>			 		
				</div>
			</div>


			<!-- Image -->
			  <div class="form-group col">
          <label for="exampleInputFile">Profile image:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
       
       <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('image');
          if(isset($error)){ echo $error;}?>          
        </div>
         </div>
		    </div>

		<div class="row">  
			<!-- Select one -->
			<div class="col">
				<label for="gender" class="form-label">Gender:</label>	<br>			
				<input type="radio" name="gender" value="Male"> Male
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="Transgender"> Transgender
				<!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('gender');?>			 		
				</div>
			</div>

       <!-- Address -->
      <div class="mb-3 col">
        <label for="addres" class="form-label">Address:</label>
       <!--  <textarea class="form-control" rows="3" cols="3" name="address" id="address"></textarea> -->
       <input type="text" class="form-control" name="address" id="address">
        <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('address');?>          
        </div>
      </div>			
		</div>


    <div class="row">
      <!-- City -->
      <div class="mb-3 col">
        <label for="city" class="form-label">City:</label>
        <input type="text" class="form-control" name="city" id="city" >
        
        <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('city');?>          
        </div>
      </div>    

      <!-- State -->      
      <div class="mb-3 col">
        <label for="state" class="form-label">State:</label>
        <input type="text" class="form-control" name="state" id="state">        
        <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('state');?>          
        </div>
      </div>    
    </div>

    <div class="row">
       <!-- pincode -->      
      <div class="mb-3 col">
        <label for="pincode" class="form-label">Pincode:</label>
        <input type="text" class="form-control" name="pincode" id="pincode" maxlength="6">        
        <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('pincode');?>          
        </div>
      </div>    
      <!-- language -->      
      <div class="form-group col">
          <label>Language you know:</label>
            <select name="language[]" class="form-control multipleselect" multiple>
                 <?php foreach ($language as $key) {?>
                  
                    <option value="<?php echo $key->lan_id?>"><?php echo $key->language;?></option>
                 <?php  } ?>                       
            </select>
        <!-- Error message show -->
        <div class="text-danger">
          <?php echo form_error('language[]');?>          
        </div>
      </div>
      
    </div>
    

		
		     <!--  <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
  		        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  		       	       
           </div>	 -->

           <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
            <div class="p-2">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit"> 
              </div>
              <div class="p-2">   
<!--               <a href="<?php echo base_url('Sample/userdashboard');?>" class="btn btn-primary">Back</a> -->
            </div>
           </div> 

		
	</form>
			  
           	

	
            </div>
            
          </div>
          
        </div>
        
      </div>
     
    </section> 
    
  </div>
  

<?php $this->load->view('layout/footer');?>

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
                <h3 class="card-title">Edit User data</h3>
              </div>	
  <div class="container mt-4 border-3 shadow-lg p-4">
   	<div>
       <form action="<?php echo base_url('Sample/update/'.$edit->id);?>" method="POST">
		
		
			<!-- Full name -->
			<div class="mb-3">
			  <label for="fullname" class="form-label">Full name:</label>
			  <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $edit->fullname;?>">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('fullname');?>			 		
				</div>
			</div>

			<!-- Email -->
			<div class="mb-3 ">
			  <label for="email" class="form-label">Email address:</label>
			  <input type="email" class="form-control" name="email" id="email" value="<?php echo $edit->email;?>">
			  <!-- Error message show -->
				<div class="text-danger">
				 	<?php echo form_error('email');?>			 		
				</div>
			</div>				
			
  		        <input type="submit" name="submit" class="btn btn-primary" value="Update"> 
  		      <!--  <a href="" type="submit" name="submit" class="btn btn-primary">Update</a> -->
  		        <a href="<?php echo base_url('Sample/admindashboard');?>" class="btn btn-primary">Back</a>	
  		       	        
           	

		
	</form>
     </div>
     
 </div>
    </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>







  <script>
jQuery(document).ready(function($) {
    $('#example2').DataTable();
} );
</script>
<?php include 'footer.php';?>

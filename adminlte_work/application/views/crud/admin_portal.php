<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php include 'sidebaradmin.php';?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data of register User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<div class="container p-2">
                  <a href="<?php echo base_url('Sample/adduser');?>" class="btn btn-primary">Add User</a>
                </div>
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $key) {?>                 
                  <tr>
                    <?php $id = $key->id;?>
                    <td><?php echo $id?></td>
                    <td><?php echo $key->fullname?></td>
                    <td><?php echo $key->email?></td>
                    <td><a href="<?php echo base_url('Sample/edit/'.$id);?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?php echo base_url('Sample/delete/'.$id);?>"  class="btn btn-primary">Delete</a></td>
                  </tr>
                   <?php  } ?>
                  
                  </tbody>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
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





<!--  datatable in javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

  <script type="text/javascript">
jQuery(document).ready(function($) {
    $('#example2').DataTable();
} );
</script>
<?php include 'footer.php';?>
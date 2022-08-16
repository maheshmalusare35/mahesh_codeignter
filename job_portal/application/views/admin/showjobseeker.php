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
                <h3 class="card-title">Show Job Seeker</h3>
              </div>
              <div class="container mt-4 border-3 shadow-lg p-4">
                
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
                    <td><?php echo $id;?></td>
                    <td><?php echo $key->fullname?></td>
                    <td><?php echo $key->email?></td>
                    <td><a href="<?php echo base_url('Sample/edit/'.$id);?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?php echo base_url('Sample/delete/'.$id);?>"  class="btn btn-primary">Delete</a></td>
                  </tr>
                   <?php  } ?>
                  
                  </tbody>
                  
                  
                </table>

             </div>
            </div>            
          </div>          
        </div>        
      </div>     
    </section>     
  </div>


<?php $this->load->view('layout/footer');?>
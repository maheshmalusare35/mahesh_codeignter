<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url().'Assets/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

   <!-- sweet alert -->
   <!--  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
 -->    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    


    <title>Admin Dashboard</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin DashBoard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li> -->
        
      </ul>
      <form class="d-flex">
        <?php echo anchor('User/logout','LOGOUT','class="link-class btn btn-primary"');?>
      </form>
    </div>
  </div>
</nav> 


<div class="container">
	<div class="m-3 border border-3 shadow-lg rounded-3 bg-light">
		<!-- for the add button display on page -->
		<?php echo anchor('User/create','Add','class="link-class btn btn-primary m-3"');?>	


		<div class="container">		
    <?php if($msg = $this->session->flashdata('msg')):?>	
			<div class="row">
				<div class="col-lg">
					<div class="alert alert-success">	
          <div class="text-center">					
						<?php echo $msg = $this->session->flashdata('msg');?>
            </div>						
					</div>
				</div>
			</div>		
      <?php endif;?> 
		</div>
	

		<!-- table -->
		<div class="container p-2">
			<table class="table table-striped text-center" id="tblUser">
				<thead>
					<tr>
						<th>Id</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Contact No</th>
            <th>Image</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
				<?php if(!empty($data)): ?>
					<?php foreach($data as $use): ?>
					<?php $id = $use->id; ?>				
						<tr>
							<td><?php echo $id;?></td>
							<td><?php echo $use->firstname;?></td>
							<td><?php echo $use->lastname;?></td>
							<td><?php echo $use->email;?></td>
							<td><?php echo $use->contact_no;?></td>
              <td><img src="<?php echo base_url('uploads/').$use->image;?>" style="height: 100px;width: 120px;"></td>
							<td><a href="<?php echo base_url('index.php/User/edit/'.$id);?>" class="btn btn-success edit">Edit</a></td>
							<td><a href="<?php echo base_url('index.php/User/delete/'.$id);?>" class="btn btn-danger remove">Delete</a></td>						
						</tr>
					<?php endforeach; ?>					
				<?php endif; ?>
			</tbody>
			</table>	
		</div>
	</div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url().'Assets/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   <!--  datatable in javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
    <!-- <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script> -->
<script type="text/javascript">
  



    $(".remove").click(function(){
        // var id = $(this).parents("td").attr("id");
    
     swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
    });
    
</script>

  </body>

</html>
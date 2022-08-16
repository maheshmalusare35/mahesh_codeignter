<?php
include "connection.php";

$id=$_GET['updateid'];

$displayquery = "SELECT * FROM admin_panel";
       $querydisplay = mysqli_query($conn,$displayquery);                 
        while ($result = mysqli_fetch_assoc($querydisplay)) {
          $id = $result['id'];
          $username = $result['username'];
          $email = $result['email'];
          $phone_no = $result['phone_no'];}


if (isset($_POST['submit'])) {
  $username_new = $_POST['username'];
$email_new = $_POST['email'];
$phone_no_new = $_POST['phone_no'];




  $sql="UPDATE `admin_panel` SET username='$username_new',email='$email_new',phone_no='$phone_no_new' WHERE id = $id ";

  $result=mysqli_query($conn,$sql);

  if ($result) {
	?>
	 <script type="text/javascript">
     alert("Record Updated Successfully");
     location.replace('index.php');
     </script>
<?php
}else{

	?>
	 <script type="text/javascript">
     alert("Record Not Updated");
     location.replace('index.php');
     </script>
<?php
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
   <div class="container-fluid">
      <div class="align-items-center">
        <div class="col-md-8 mx-auto shadow-lg p-4 bg-light border border-1 rounded-3"> 
        

<form action="update.php" method="POST">
			<div class="mb-3">
          		<div class="mb-3">
			  <label for="exampleFormControlid" class="form-label">Id:</label>
			  <input type="text" class="form-control" name="id" id="id" value="<?php echo$id;?>" aria-label="Disabled input example" disabled readonly>
			</div>
          	<div class="mb-3">
          		<div class="mb-3">
			  <label for="exampleFormControlusername" class="form-label">Username:</label>
			  <input type="text" class="form-control" name="username" id="username" value="<?php echo$username;?>">
			</div>			
			<div class="mb-3">
			  <label for="exampleFormControlemail" class="form-label">Email address:</label>
			  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?php echo$email;?>">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlphone_no" class="form-label">Phone no:</label>
			  <input type="text" class="form-control" name="phone_no" id="phone_no" value="<?php echo$phone_no;?>" maxlength="10">
			</div>						
			<div class="d-grid gap-2 col-6 mx-auto mb-3">
              <button type="submit" name="submit" id="submitbtn" class="btn btn-primary btn-lg">Update</button>
            </div>            
          </form>
          
        </div>
      </div>
    </div>








 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
   
  </body>
</html>
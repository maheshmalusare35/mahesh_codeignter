<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
	

$id = $_GET['deleteid'];

$sql = "DELETE FROM `admin_panel` WHERE id = $id;";
$result=mysqli_query($conn,$sql);


if ($result) {
	?>
	 <script type="text/javascript">
     alert("Record Deleted Successfully");
     location.replace('index.php');
     </script>
<?php
}else{
	?>
	 <script type="text/javascript">
     alert("Record Not Deleted");
     location.replace('index.php');
     </script>
<?php
}
}
?>
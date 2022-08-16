<?php
 include 'connection.php';

$id=$_GET['delete_id'];


 $sql = "DELETE FROM admin_panel WHERE id = $id";

 if($conn->query($sql)){

 	?>
		<script>
			alert("Record Deleted Succcessfully.....<?php echo $id;?>");
			location.replace('index.php');
		</script>
		<?php
 }
 else
 {
 	?>
		<script>
			alert("Oops!..Record Not Deleted.....");
			location.replace('index.php');
		</script>
		<?php
 }


?>
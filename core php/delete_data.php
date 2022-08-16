<?php
 include '../mahesh_php/CRUD_OPERATION/connection.php';

 $id = $_POST['id'];
 $sql = "DELETE FROM admin_panel WHERE id = $id";

 if($conn->query($sql)){
 	echo 'record delete';
 }
 else
 {
 	echo 'record not delete';
 }


?>
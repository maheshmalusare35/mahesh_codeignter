<?php


if(isset($_POST['submit']) && !empty($_POST['file_name']))
{
	$file_name = $_FILES['file_name']['name'];
	$tmp_file_name = $_FILES['file_name']['tmp_name'];

	$location = '../upload/';
		if (move_uploaded_file($tmp_file_name, $location)) 
		{
			echo 'file uploaded';
		}
}
else
	{
		echo 'please fill the field';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="upload_file_new.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file_name"><br>
	<input type="submit" value="submit">	
</form>


</body>
</html>
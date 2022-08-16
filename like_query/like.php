<?php
// like query

//start with first letter
//$sql = "SELECT owner_name FROM owner WHERE owner_name LIKE '%b'";

//check colunm in word is present
//$word = "SELECT surname FROM `owner` WHERE surname LIKE '%g%'";



include '../database/connection.php';

if (isset($_POST['name']))
{
	$names = $_POST['name'];
	if (!empty($_POST['name'])) 
	{
		$sql = "SELECT owner_name FROM owner WHERE owner_name LIKE '%".mysqli_real_escape_string($conn,$names)."%'";
		$query_run =mysqli_query($conn,$sql);

		if (mysqli_num_rows($query_run)>=1) {
			echo "Result Founds:";
			while ($query_row =mysqli_fetch_assoc($query_run)) {
				echo $query_row['owner_name'].'<br>';
			}
		}

	}else
	{
		echo "Please fill the field";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Like query</title>
</head>
<body>

	<form action="like.php" method="POST">
		Name_search:<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>

</body>
</html>
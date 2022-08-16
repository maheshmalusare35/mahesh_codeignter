<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User detail</title>
</head>
<body>
<!-- <?php print_r($user_data);?> -->
<h1>User Detail</h1>
<table>
	<tr>
		<td>firstname</td>
		<td>lastname</td>
	</tr>
	<?php foreach ($user_data as $data): ?>	
	<tr>
		<td><?php echo $data['firstname'];?></td>
		<td><?php echo $data['lastname'];?></td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>
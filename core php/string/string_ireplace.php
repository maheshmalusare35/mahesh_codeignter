<!-- <?php

$find = array('alex','harry','bob');
$replace = array('a**x','h***y','b*b');

if (isset($_POST['text_area']) && !empty($_POST['text_area'])) {
	$textareas = $_POST['text_area'];

	$new_replace = str_replace($find, $replace, $textareas);
	echo $new_replace;
}

?> -->
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="string_ireplace.php" method="POST">
	<textarea name="text_area" rows="6" cols="30"><?php echo $textareas;?></textarea><br>
	<input type="submit" value="submit">
</form>

</body>
</html> -->



<?php

if (isset($_POST['submit'])) {
	$textareas =$_POST['text_area'];

	$search = $_POST['search_for'];
	$replace = $_POST['replace_with'];


	$string_replace = str_replace($search, $replace, $textareas);


	echo $string_replace;
}



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<hr>
<form action="string_ireplace.php" method="POST">
	<textarea name="text_area" rows="10" cols="30"> </textarea><br><br>
	Search_for :<br><input type="text" name="search_for" ><br><br>
	Replace_with :<br><input type="text" name="replace_with"><br><br>
	<input type="submit" value="submit" name="submit">
</form>
</body>
</html>

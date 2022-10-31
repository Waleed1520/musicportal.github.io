<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<?php 
if (isset($_GET['submit'])) {
	
	echo $_GET['r1'];
}

	?>


<h1>Form</h1>

<form method="get">
	
	<label>text feild</label>
	<input type="text" name="r1">

	<input type="submit" name="submit">


</form>
</body>
</html>
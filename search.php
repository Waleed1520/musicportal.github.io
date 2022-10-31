<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=music_portal",'root','');

if (isset($_POST["submit"])) {
	$search = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM datadetails  WHERE filename ='$search' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Details</th>
			</tr>
			<tr>
				<td><?php echo $row->filename; ?></td>
				<td><?php echo $row->details;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
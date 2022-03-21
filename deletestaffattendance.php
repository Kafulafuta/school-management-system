	<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="school";
	$con=mysqli_connect($host,$user,$pass,$db);
	if ($con)
	{
		echo "";
	}
	else
	{
		echo "";
	}
	
	$id=$_GET['id'];
	$sql="DELETE FROM attendance WHERE id=$id";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "<p align='center' style='color: #00ff00;'>Data Deleted successfully</p>";
	}
	else
	{
		echo "<p align='center' style='color: #ff0000;'>Sorry, deleted process failed</p>";
	}

	?>
	
	<html>
	<head>
	<body>
	<center>
	<a href="staffattend.php">GO BACK</a>
	</center>
	</body>
	</head>
	<html>
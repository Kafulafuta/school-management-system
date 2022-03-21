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
	$sql="DELETE FROM addbook WHERE id=$id";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo"<script>alert('Record Deleted')</script>";
		?>
		
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/school/addbook.php">
		<?php
	}
	else
		
	{
		echo "Sorry, deleted process failed";
	}
	?>
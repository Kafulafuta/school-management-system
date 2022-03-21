<?php
$host="localhost";
$user="root";
$pass="";
$db="school";
$con=mysqli_connect($host,$user,$pass,$db);
if ($con)
{
	echo "connection success";
}
else
{
	echo "connection failed";
}








?>

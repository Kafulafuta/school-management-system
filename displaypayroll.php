<?php
error_reporting(0);
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
	echo "connection failed";
}

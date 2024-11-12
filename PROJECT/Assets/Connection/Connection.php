<?php
$server='localhost';
$user='root';
$password="";
$db="db_travetget";
$con=mysqli_connect($server,$user,$password,$db);
if(!$con)
{
	echo "error";
}
?>
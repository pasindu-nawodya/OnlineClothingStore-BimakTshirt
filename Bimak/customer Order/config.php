<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbName = "bimak";
$con = new mysqli($host,$dbUsername,$dbPassword,$dbName);
if($con -> connect_error)
{
	die("connection failed" .$con->connect_error);
	
}
?>
<?php

$conn = mysqli_connect("localhost","root","1234","bimak");

if(mysqli_connect_errno()){
	echo "Database connection Failed.." . mysqli_connect_error(); 
}


?>
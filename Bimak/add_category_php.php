<?php

	$category = $_POST['category'];


	$conn = new mysqli("localhost","root","1234","bimak");

	$INSERT = "INSERT INTO category(categoryname) VALUES ('$category')";

	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param('s',$category);

	$stmt->execute();
				
			//redirect to admin page 
	header("Location:http://localhost/ITP_Project/Bimak/add_category.php");

	$stmt->close();
	$conn->close();

?>
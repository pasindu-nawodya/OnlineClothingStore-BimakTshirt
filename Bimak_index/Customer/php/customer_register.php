<?php

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	

	$conn = new mysqli("localhost","root","1234","bimak");

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}else{


			$INSERT = "INSERT INTO customer_account(firstname,lastname,address,telephone,email,password,cphoto) VALUES ('$firstname','$lastname','$address','$telephone','$email','$password','$cphoto')";


			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param('ssssss',$firstname,$lastname,$address,$telephone,$email,$password);

			$stmt->execute();
				
			//redirect to admin page 
			//echo "<script>alert ('User Registration Successful! Please Login')</script>";
			//echo "<script>window.open('../customer_login.php','_self')</script>";
			header("Location:../customer_successfulregistration.php");

			$stmt->close();
			$conn->close();

		}

?>
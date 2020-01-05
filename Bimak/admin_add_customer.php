<?php

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$loc = "customer/";

	$cphoto = $loc.basename($_FILES['cfile']['name']);
	$imageFileType = strtolower(pathinfo($cphoto,PATHINFO_EXTENSION));

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   		
   		 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	
	}else{

		if (move_uploaded_file($_FILES["cfile"]["tmp_name"], $cphoto)) {

       		 if (!empty($firstname) && !empty($lastname) && !empty($address) && !empty($telephone) && !empty($email) && !empty($password)) {

		$conn = new mysqli("localhost","root","1234","bimak");

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}else{


			$INSERT = "INSERT INTO customer_account(firstname,lastname,address,telephone,email,password,cphoto) VALUES ('$firstname','$lastname','$address','$telephone','$email','$password','$cphoto')";


			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param('sssssss',$firstname,$lastname,$address,$telephone,$email,$password,$cphoto);

			$stmt->execute();
				
			//redirect to admin page 
			header("Location:http://localhost/ITP_Project/Bimak/customer_admin.php");

			$stmt->close();
			$conn->close();

		}

	}else{

		echo "All field are required";
		die();
	}
   	 }
	}

?>
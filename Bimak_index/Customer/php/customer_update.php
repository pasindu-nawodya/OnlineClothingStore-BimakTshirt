<?php
		
		session_start();

		$cid = $_POST['cid'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];
		$email = $_POST['email'];
		$password = $_POST['password'];

	
		$loc = "../customer/";

		$cphoto = $loc.basename($_FILES['cfile']['name']);
		$imageFileType = strtolower(pathinfo($cphoto,PATHINFO_EXTENSION));

		$conn = new mysqli("localhost","root","1234","bimak");

		if (move_uploaded_file($_FILES["cfile"]["tmp_name"], $cphoto)) {
		echo "insert";

		$query1 = "update customer_account set firstname='$firstname',lastname='$lastname', address='$address',telephone='$telephone',email='$email' , password='$password' , cphoto = '$cphoto' where cid = '$cid' ";
		
		$run_query = mysqli_query($conn , $query1);


		if($run_query){

			$_SESSION['cid'] = $cid;
        	$_SESSION['firstname'] = $firstname;
        	$_SESSION['lastname'] = $lastname;
        	$_SESSION['address'] = $address;
       	 	$_SESSION['telephone'] = $telephone;
        	$_SESSION['email'] = $email;
        	$_SESSION['password'] = $password;
        	$_SESSION['cphoto'] = $cphoto; 

			header("Location:../customer_account.php");
		}
	}

?>
<?php
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$loc = "admin/";

		$aphoto = $loc.basename($_FILES['aphoto']['name']);
		$imageFileType = strtolower(pathinfo($aphoto,PATHINFO_EXTENSION));


		$conn = new mysqli("localhost","root","1234","bimak");


	
		if (move_uploaded_file($_FILES["aphoto"]["tmp_name"], $aphoto)) {
		

		$query1 = "update admin set name='$name',username='$username', email='$email',password='$password', aphoto='$aphoto' where id=1";
		
		mysqli_query($conn , $query1);

		header("Location:http://localhost/ITP_Project/Bimak/admin_account.php");

	}else{



		$query1 = "update admin set name='$name',username='$username', email='$email',password='$password' where id=1";
		
		mysqli_query($conn , $query1);

		header("Location:http://localhost/ITP_Project/Bimak/admin_account.php");
	}

?>
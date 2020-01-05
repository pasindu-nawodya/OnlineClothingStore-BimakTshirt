
<?php
		
		$cid = $_POST['cid'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];
		$email = $_POST['email'];
		$password = $_POST['password'];

	
		$loc = "customer/";

		$cphoto = $loc.basename($_FILES['cfile']['name']);
		$imageFileType = strtolower(pathinfo($cphoto,PATHINFO_EXTENSION));

		$conn = new mysqli("localhost","root","1234","bimak");
		echo "outside";

		if (move_uploaded_file($_FILES["cfile"]["tmp_name"], $cphoto)) {
		echo "insert";

		$query1 = "update customer_account set firstname='$firstname',lastname='$lastname', address='$address',telephone='$telephone',email='$email' , password='$password' , cphoto = '$cphoto' where cid = '$cid' ";
		
		$run_query = mysqli_query($conn , $query1);

		if($run_query){

			header("Location:http://localhost/ITP_Project/Bimak/list_customer.php");
		}
	}

?>
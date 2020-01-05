
<?php

	session_start();

	
		$ids = $_POST['id'];
		$ename = $_POST['ename'];
		$nic = $_POST['nic'];
		$epassword = $_POST['epassword'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$line1 = $_POST['line1'];
		$line2 = $_POST['line2'];
		$type = $_POST['type'];
		$edesc = $_POST['edesc'];
		$gender =$_POST['gender'];

		$conn = new mysqli("localhost","root","1234","bimak");

		


		$query1 = "update employee set ename = '$ename',nic='$nic',epassword='$epassword' ,dob='$dob' ,email='$email',phone = '$phone',line1='$line1',line2='$line2',type='$type',image ='$ephoto',edesc='$edesc',gender='$gender' where id = '$ids' ";
		
		$run_query = mysqli_query($conn , $query1);

		if($run_query){
			
			header("Location:http://localhost/ITP_Project/Bimak/OrderHandler/order_handling_dashboard.php");
		}
		


?>
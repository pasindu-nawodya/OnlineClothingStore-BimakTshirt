<?php
   session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = new mysqli("localhost","root","1234","bimak");

		
		$get_admin = "select * from employee where email ='$username' ";

         $run_admin = mysqli_query($conn , $get_admin);
         $row_admin = mysqli_fetch_array($run_admin);
         $un = $row_admin['email'];
         $pw = $row_admin['epassword'];
         $id = $row_admin['id'];

         if(($username == $un) && ($password == $pw)){
          $_SESSION['id'] = $id;
         	header("Location:http://localhost/ITP_Project/Bimak/Employee/Emp/dashboard.php");
          
         
         }else{

         	echo "<script>alert ('User Name didn't match to the password!')</script>";
         	header("Location:http://localhost/ITP_Project/Bimak/Employee/Emp/emp_login.php");

         }

?>
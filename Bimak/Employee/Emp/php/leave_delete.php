<?php

 session_start();
 require_once 'dbconnection.php'; 
 if(!isset($_SESSION['id'])& empty($_SESSION['id'])) {
  header('location: emp_login.php');
 }

    
   $id = $_SESSION['id'];

		$conn = new mysqli("localhost","root","1234","bimak");


		if (isset($_GET['del'])) {
			
			$del_id = $_GET['del'];

			$del_item = "delete from leave_details where leave_id =$del_id";
			$run_del_item = mysqli_query($conn , $del_item);

			if ($run_del_item) {
				 $_SESSION['id'] = $id;
				echo "<script>alert ('Removed successfully!')</script>";
				echo "<script>window.open('../leave.php','_self')</script>";

			}
		}

?>
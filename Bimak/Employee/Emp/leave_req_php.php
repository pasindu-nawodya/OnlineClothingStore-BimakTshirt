<?php
	
 
 session_start();
 require_once 'dbconnection.php'; 
 if(!isset($_SESSION['id'])& empty($_SESSION['id'])) {
  header('location: emp_login.php');
 }

    
   $id = $_SESSION['id'];
	$ids = $_POST['id'];
	$leave_type = $_POST['leave_type'];
	$reason = $_POST['reason'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];


       		 if (!empty($ids)) {

				$conn = new mysqli("localhost","root","1234","bimak");

				if(mysqli_connect_error()){
					die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
				}else{


				$INSERT = "INSERT INTO leave_details (emp_id,leave_type,reason,start_date,end_date) VALUES ('$ids','$leave_type','$reason','$start_date','$end_date')";


			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param('sssss',$ids,$leave_type,$reason,$start_date,$end_date);

			$stmt->execute();
				$_SESSION['id'] = $id;
			//redirect to admin page 
			header("Location:http://localhost/ITP_Project/Bimak/Employee/Emp/leave.php");

			$stmt->close();
			$conn->close();

		}

	}else{

		echo "All field are required";
		die();
	}
   	 
	

?>
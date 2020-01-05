<?php
	

	session_start();
 require_once 'dbconnection.php'; 
 if(!isset($_SESSION['id'])& empty($_SESSION['id'])) {
  header('location: emp_login.php');
 }

    $id = $_SESSION['id'];
	$ids = $_POST['id'];
	$amount = $_POST['amount'];
	$loanDate = $_POST['loanDate'];
	$reason = $_POST['reason'];


       		 if (!empty($ids)) {

				$conn = new mysqli("localhost","root","1234","bimak");

				if(mysqli_connect_error()){
					die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
				}else{


				$INSERT = "INSERT INTO loan_details (emp_id,amount,loanDate,reason) VALUES ('$ids','$amount','$loanDate','$reason')";


			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param('ssss',$ids,$amount,$loanDate,$reason);

			$stmt->execute();
				$_SESSION['id'] = $id;
			//redirect to admin page 
			header("Location:http://localhost/ITP_Project/Bimak/Employee/Emp/loan.php");

			$stmt->close();
			$conn->close();

		}

	}else{

		echo 'All field are required';
		die();
	}
   	 
	

?>
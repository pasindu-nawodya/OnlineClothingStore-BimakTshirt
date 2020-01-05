
<?php
	
		 							$id = $_POST['id'];
         							
                                    $status = $_POST['Statustype'];
                                    

		

		$conn = new mysqli("localhost","root","1234","bimak");

		


		$query1 = "update leave_details set status = '$status' where emp_id = '$id' ";
		
		$run_query = mysqli_query($conn , $query1);

		if($run_query){

			header("Location:http://localhost/ITP_Project/Bimak/leave_req.php");
		}


?>
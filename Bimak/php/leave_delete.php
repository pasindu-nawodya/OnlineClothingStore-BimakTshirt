<?php

		$conn = new mysqli("localhost","root","1234","bimak");


		if (isset($_GET['del'])) {
			
			$del_id = $_GET['del'];

			$del_item = "delete from leave_details where leave_id =$del_id";
			$run_del_item = mysqli_query($conn , $del_item);

			if ($run_del_item) {
				
				echo "<script>alert ('Removed successfully!')</script>";
				echo "<script>window.open('../leave.php','_self')</script>";

			}
		}

?>
<?php

		$conn = new mysqli("localhost","root","1234","bimak");


		if (isset($_GET['del'])) {
			
			$del_id = $_GET['del'];

			$del_item = "delete from employee where id = $del_id";
			$run_del_item = mysqli_query($conn , $del_item);

			if ($run_del_item) {
				
				echo "<script>alert ('Employee removed from stock successfully!')</script>";
				echo "<script>window.open('../list_employee.php','_self')</script>";

			}
		}

?>
<?php

		$conn = new mysqli("localhost","root","1234","bimak");


		if (isset($_GET['del'])) {
			
			$del_id = $_GET['del'];

			$del_sal = "delete from salary where empID = $del_id";
			$run_del_sal = mysqli_query($conn , $del_sal);

			if ($run_del_sal) {
				
				echo "<script>alert ('Employee Salary removed successfully!')</script>";
				echo "<script>window.open('../sal_view.php','_self')</script>";

			}
		}

?>
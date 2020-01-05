<?php
	session_start();
	require_once 'config/connect.php';
	
	

		if (isset($_GET['del'])) {
			
			$id = $_GET['del'];

			$del_item = "delete from users where id = $id";
			$run_del_item = mysqli_query($connection, $del_item);

			if ($run_del_item) {
				
				echo "<script>alert ('Item removed from stock successfully!')</script>";
				echo "<script>window.open('report_customer.php','_self')</script>";

			}
		}
?>
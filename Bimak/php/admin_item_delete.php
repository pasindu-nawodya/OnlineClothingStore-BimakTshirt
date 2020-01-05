<?php

		$conn = new mysqli("localhost","root","1234","bimak");


		if (isset($_GET['del'])) {
			
			$del_id = $_GET['del'];

			$del_item = "delete from products where id = $del_id";
			$run_del_item = mysqli_query($conn , $del_item);

			if ($run_del_item) {
				
				echo "<script>alert ('Item removed from stock successfully!')</script>";
				echo "<script>window.open('../list_item.php','_self')</script>";

			}
		}

?>
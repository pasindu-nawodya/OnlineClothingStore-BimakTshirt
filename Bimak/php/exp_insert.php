<?php

	require 'bimak_conn.php';

	if(isset($_POST['save'])){

		$date = $_POST['date'];
		$category = $_POST['category'];
		$amount = $_POST['amount'];
		$notes = $_POST['note'];

		$qry = "insert into expences(date,category,amount,note) values ('$date','$category','$amount', '$notes')";

		$insert_qry = mysqli_query($conn, $qry);

		if($insert_qry){
			echo "<script> alert('A record has been inserted..!') </script>";
			echo "<script> window.open('admin_finance.php','_self')</script>";
		}

		mysqli_close($conn);


	}


?>
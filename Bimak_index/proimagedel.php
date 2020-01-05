<?php 
	session_start();
	require_once 'config/connect.php'; 
	if (!isset($_SESSION['email'])& empty($_SESSION['email'])) {
		header('location: login.php');
	}
if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT cphoto FROM users WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		if(!empty($r['cphoto'])){
			if(unlink($r['cphoto'])){
				$delsql = "UPDATE users SET cphoto='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:customer_update.php?id={$id}");
				}
			}else{
				$delsql = "UPDATE users SET cphoto='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:customer_update.php?id={$id}");
				}
			}

	}else{
		$delsql = "UPDATE users SET cphoto='' WHERE id=$id";
		if(mysqli_query($connection, $delsql)){
			header("location:customer_update.php?id={$id}");
		}
	}
}else{
	header("location:customer_update.php?id={$id}");
}
	?>
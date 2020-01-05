<?php 
	session_start();
	require_once 'config/connect.php'; 
	if (!isset($_SESSION['email'])& empty($_SESSION['email'])) {
		header('location: login.php');
	}
if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT thumbneil FROM products WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		if(!empty($r['thumbneil'])){
			if(unlink($r['thumbneil'])){
				$delsql = "UPDATE products SET thumbneil='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:item_edit.php?id={$id}");
				}
			}else{
				$delsql = "UPDATE products SET thumbneil='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:item_edit.php?id={$id}");
				}
			}

	}else{
		$delsql = "UPDATE products SET thumbneil='' WHERE id=$id";
		if(mysqli_query($connection, $delsql)){
			header("location:item_edit.php?id={$id}");
		}
	}
}else{
	header("location:item_edit.php?id={$id}");
}
	?>

<?php
		
		$id = $_POST['id'];
		$iname = $_POST['iname'];
		$iprice = $_POST['iprice'];
		$iqty = $_POST['iqty'];
		//$itype = $_POST['itype'];
		$isize = $_POST['isize'];
		$igender = $_POST['igender'];
		$idesc = $_POST['idesc'];
	
		$loc = "product/";

		$iphoto = $loc.basename($_FILES['ifile']['name']);
		$imageFileType = strtolower(pathinfo($iphoto,PATHINFO_EXTENSION));

		$conn = new mysqli("localhost","root","1234","bimak");

		if (move_uploaded_file($_FILES["ifile"]["tmp_name"], $iphoto)) {


		$query1 = "update item set iname='$iname',iprice='$iprice', iqty='$iqty',isize='$isize',itype='$itype' , igender='$igender' , iphoto = '$iphoto' , idesc = '$idesc' where id = '$id' ";
		
		$run_query = mysqli_query($conn , $query1);

		if($run_query){

			header("Location:http://localhost/ITP_Project/Bimak/list_item.php");
		}
	}

?>
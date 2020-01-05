<?php

	$iname = $_POST['iname'];
	$iprice = $_POST['iprice'];
	$iqty = $_POST['iqty'];
	$itype = $_POST['itype'];
	$isize = $_POST['isize'];
	$igender = $_POST['igender'];
	$idesc = $_POST['idesc'];
	$loc = "product/";

	$iphoto = $loc.basename($_FILES['ifile']['name']);
	$imageFileType = strtolower(pathinfo($iphoto,PATHINFO_EXTENSION));

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   		
   		 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	
	}else{

		if (move_uploaded_file($_FILES["ifile"]["tmp_name"], $iphoto)) {

       		 if (!empty($iname) && !empty($iprice) && !empty($iqty)) {

		$conn = new mysqli("localhost","root","1234","bimak");

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}else{


			$INSERT = "INSERT INTO item (iname,iprice,iqty,itype,isize,igender,idesc,iphoto) VALUES ('$iname','$iprice','$iqty','$itype','$isize','$igender','$idesc','$iphoto')";


			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param('ssssssss',$iname,$iprice,$iqty,$itype,$isize,$igender,$idesc,$iphoto);

			$stmt->execute();
				
			//redirect to admin page 
			header("Location:http://localhost/ITP_Project/Bimak/stock_admin.php");

			$stmt->close();
			$conn->close();

		}

	}else{

		echo "All field are required";
		die();
	}
   	 }
	}

?>
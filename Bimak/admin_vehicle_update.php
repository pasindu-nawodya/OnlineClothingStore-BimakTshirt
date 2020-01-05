<?php
            
 
        $vehicle_id = $_POST['vehicle_id'];
        $vreg_no = $_POST['vreg_no'];
        $v_type = $_POST['v_type'];
        $vdesc =$_POST['vdesc'];
		
	
		$loc = "vehicle/";

		$iphoto = $loc.basename($_FILES['vfile']['name']);
		$imageFileType = strtolower(pathinfo($iphoto,PATHINFO_EXTENSION));

		$conn = new mysqli("localhost","root","1234","bimak");

		if (move_uploaded_file($_FILES["vfile"]["tmp_name"], $iphoto)) {
			

		$query1 = "update vehicle set vehicle_id = '$vehicle_id',vreg_no='$vreg_no',v_type='$v_type'  ,vdesc='$vdesc' ,iphoto = '$iphoto' where vehicle_id = '$vehicle_id' ";
		
		$run_query = mysqli_query($conn , $query1);

		if($run_query){

			header("Location:http://localhost/ITP_Project/Bimak/list_vehicle.php");
		}
		}

?>
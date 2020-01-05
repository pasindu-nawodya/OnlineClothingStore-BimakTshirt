<?php

	$ename = $_POST['ename'];
	$nic = $_POST['nic'];
	$epassword = $_POST['epassword'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$line1 = $_POST['line1'];
	$line2 = $_POST['line2'];
	$type = $_POST['type'];
	$edesc = $_POST['edesc'];
	$gender =$_POST['gender'];

	$loc = "images/employee/";

	$ephoto = $loc.basename($_FILES['image']['name']);
	$imageFileType = strtolower(pathinfo($ephoto,PATHINFO_EXTENSION));

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   		
   		 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	
	}else{

		if (move_uploaded_file($_FILES["image"]["tmp_name"], $ephoto)) {

       		 if (!empty($ename)) {

			$conn = new mysqli("localhost","root","1234","bimak");

				if(mysqli_connect_error()){
					die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
				}else{


					$INSERT = "INSERT INTO employee (ename,nic,epassword,dob,email,phone,line1,line2,type,image,edesc,gender) VALUES ('$ename','$nic','$epassword','$dob','$email','$phone','$line1','$line2','$type','$ephoto','$edesc','$gender')";


				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param('ssssssssssss',$ename,$nic,$epassword,$dob,$email,$phone,$line1,$line2,$type,$ephoto,$edesc,$gender);

				$stmt->execute();
				
				//redirect to admin page 
				header("Location:http://localhost/ITP_Project/Bimak/employee_admin.php");

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
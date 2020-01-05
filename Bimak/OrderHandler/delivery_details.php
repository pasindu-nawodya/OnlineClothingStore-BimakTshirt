<?php
require 'config.php';
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');



                                       





?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Delivery Details</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	 <script>

 

function deleteConfirm(event) {
   
  var r = confirm("Are you sure?");
  if (r == true) {
	  
    window.location = "delete_delivery.php";
  } else  {
    event.preventDefault();
  }

}
</script>
<script>
function deleteConfirms(event) {
   
  var r = confirm("Are you sure?");
  if (r == true) {
	 
    window.location = "delete_courier.php";
  } else  {
   event.preventDefault();
  }

}
</script>



</head>

<body class="animsition">
    <div class="page-wrapper">
        

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                     <img src="images/icon/logo-design-1.png" alt="Bimak" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="order_handling_dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>
                       <li>
                            <a href="order_details.php">
                                <i class="fas fa-chart-bar"></i>Order Details</a>
                        </li>
                        <li class="active">
                            <a href="delivery_details.php">
                                <i class="fas fa-table"></i>Delivery Details</a>
                        </li>
                        <li>
                            <a href="report_generate.php">
                                <i class="far fa-check-square"></i>Generate Report</a>
                        </li>

                        <li>
                             <a href="http://localhost/ITP_Project/Bimak/admin_emp_index.php">
                              <i class="fas fa-unlock-alt"></i>Log out</a>
                        </li>
                        
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
						
                            <form class="form-header" action="" method="POST">
                               
                            </form>
                            <div class="header-button">
                                 <?php 

                                     $conn = new mysqli("localhost","root","1234","bimak");

                                    $get_admin = "select * from employee where id = 1";

                                    $run_edit_admin = mysqli_query($conn , $get_admin);
                                    $row_admin = mysqli_fetch_array($run_edit_admin);
                                    $name = $row_admin['ename'];
                                    $email = $row_admin['email'];
                                    $photo = $row_admin['image'];
                                                                    

                                    echo "





                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                        
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#''>$name</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                                
                                                <div class='content'>
                                                    <h5 class='name'>
                                                        <a href='#'>$name</a>
                                                    </h5>
                                                    <span class='email'>$email</span>
                                                </div>
                                            </div>
                                            <div class='account-dropdown__body'>
                                                <div class='account-dropdown__item'>
                                                    <a href='account.php'>
                                                        <i class='zmdi zmdi-account'></i>Account</a>
                                                </div>                                                
                                            </div>
                                               <div class='account-dropdown__footer'>
                                                    <a href='http://localhost/ITP_Project/Bimak/admin_emp_index.php'>
                                                    <i class='zmdi zmdi-power'></i>Logout</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                ";

                                ?>




                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
			
            <div class="main-content">
                <div class="section__content section__content--p30">
				<form class="form-header" action="delivery_search.php" method="POST" style = "float:right;">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" name = "submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form><br><br><br>
				<h1 align = "center">Delivery Details</h1>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    
                                </div>
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                             
                                <!-- END USER DATA-->
                            </div>
							 
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
<?php
        
$val = 0;
$msg = $_POST['msg'];
$success = $_SESSION['success'];	

if($msg == 1 and $success == 1){
	
$oid =  $_POST["oId"];
$cname = $_POST["cName"];
$no = $_POST["no"];
$city = $_POST["city"];
$province =$_POST["province"];
$emp = $_POST["emp"];
$empName = $_POST["empName"];
$vid =  $_POST["vId"];
$rno = $_POST["Regno"];
$vtype = $_POST["vType"];
$del_date = "-";
$assigned_date = date("y/m/d");
$del_status = 'pending';

//..............................................................................................................................

 $sql = "INSERT INTO delivery_details(oId,cName,No,city,province,empId,empName,vId,vehicleType,RegNo,assigned_date,del_status) 
VALUES(
'{$oid}', '{$cname}', '{$no}','{$city}','{$province}','{$emp}','{$empName}','{$vid}','{$vtype}','{$rno}','{$assigned_date}','{$del_status}');";
 

if ($con->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("New Record Has Been Added Succesfully!!")';
echo '</script>';
} else {
     $con->error;
}   
                                        






					
}

else if($msg == 2 and $success == 2){
	
$oid =  $_POST["oId"];
$cname = $_POST["cName"];
$no = $_POST["no"];
$city = $_POST["city"];
$province =$_POST["province"];
$courier = $_POST["courier"];
$assigned_date = date("y/m/d");
$del_status = 'pending';

//.................................................................................................................................

$sql = "INSERT INTO delivery_details(oId,cName,No,city,province,courier,assigned_date,del_status) 
VALUES(
'{$oid}', '{$cname}', '{$no}','{$city}','{$province}','{$courier}','{$assigned_date}','{$del_status}');";


if ($con->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("New Record Has Been Added Succesfully!!")';
echo '</script>';
} else {
    $con->error;
} }  
//......................................................................................................










                        
                        
?>
											
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
								
								 
                        <h3><img src = "images/icon/delivery-truck.png">&nbsp;Home Delivery</h3><br>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Customer Name</th>
                                                <th>No</th>
                                                <th>City</th>
                                                <th>Province</th>
												<th>Deliveryman`s Id</th>
												<th>Deliveryman`s Name</th>
												<th>Vehicle Id</th>
												<th>Registration Number</th>
												<th>Vehicle Type</th>
												<th>Assigned Date</th>
												<th>Delivered Date</th>
												<th>Delivery Status</th>
												<th></th>
												<th></th>
												
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											
											
                                             $sql = "SELECT * FROM delivery_details WHERE courier is NULL";
                                             $result = $con->query($sql); 
											if($result && $result -> num_rows> 0)
											{while($row = $result -> fetch_assoc()){$_SESSION["oId"] = $row["oId"]; $_SESSION["cName"] = $row["cName"]; $_SESSION["No"] = $row["No"]; $_SESSION["city"] = $row["city"]; $_SESSION["province"] =$row["province"];$_SESSION["empId"] =$row["empId"];$_SESSION["empName"] =$row["empName"] ; $_SESSION["vId"] =$row["vId"];$_SESSION["vehicleType"] =$row["vehicleType"];$_SESSION["RegNo"] =$row["RegNo"];$_SESSION["assigned_date"] =$row["assigned_date"];$_SESSION["delivered_date"] =$row["delivered_date"];$_SESSION["del_status"] =$row["del_status"];
										echo "<tr><td>".$row["oId"]."<td>". $row["cName"]."<td>".$row["No"]."<td>".$row["city"]."<td>".$row["province"]."<td>".$row["empId"]."<td>".$row["empName"]."<td>".$row["vId"]."<td>".$row["RegNo"]."<td>".$row["vehicleType"]."<td>".$row["assigned_date"]."<td>".$row["delivered_date"]."<td>".$row["del_status"]."<td>
										<form method = 'post' action = 'update_delivery.php' target = '_self'>
										<input type = 'hidden' name = 'oId' value = " .$row["oId"].">
										<input type = 'hidden' name = 'cName' value = " .$row["cName"].">
										<input type = 'hidden' name = 'No' value = " .$row["No"].">
										<input type = 'hidden' name = 'city' value = " .$row["city"].">
										<input type = 'hidden' name = 'province' value = " .$row["province"].">
										<input type = 'hidden' name = 'empId' value = " .$row["empId"].">
										<input type = 'hidden' name = 'empName' value = " .$row["empName"].">
										<input type = 'hidden' name = 'vId' value = " .$row["vId"].">
										<input type = 'hidden' name = 'RegNo' value = " .$row["RegNo"].">
										<input type = 'hidden' name = 'vehicleType' value = " .$row["vehicleType"].">
										<input type = 'hidden' name = 'delivered_date' value = " .$row["delivered_date"].">
										<input type = 'hidden' name = 'assigned_date' value = " .$row["assigned_date"].">
										
										

										
										<input type = 'submit' value = 'update' class = 'btn btn-warning'></form><td><form method = 'post' action = 'delete_delivery.php' target = '_self'> <input type = 'hidden' name = 'oId'  value = " .$row["oId"]."><input class='btn btn-danger' type='submit' onclick = 'deleteConfirm(event)' value = 'Delete'></form></td></tr>"; }}else{ echo "no results";}  ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
								
								
								<h3><img src = "images/icon/inspection.png">Courier Service</h3><br>
								 <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Customer Name</th>
                                                <th>No</th>
                                                <th>City</th>
                                                <th>Province</th>
												<th>Courier Service</th>
												<th>Assigned Date</th>
												<th>Delivered Date</th>
												<th>Delivery Status</th>
												<th></th>
												<th></th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											
                                             $sql = "SELECT * FROM delivery_details WHERE courier is not NULL";
                                             $result = $con->query($sql); 
											if($result && $result -> num_rows> 0)
											{while($row = $result -> fetch_assoc()){ 
										
										$_SESSION["oId1"] = $row["oId"]; $_SESSION["cName"] = $row["cName"]; $_SESSION["No"] = $row["No"]; $_SESSION["city"] = $row["city"]; $_SESSION["province"] =$row["province"];$_SESSION["empId"] =$row["empId"];$_SESSION["empName"] =$row["empName"] ; $_SESSION["vId"] =$row["vId"];$_SESSION["vehicleType"] =$row["vehicleType"];$_SESSION["RegNo"] =$row["RegNo"];$_SESSION["assigned_date"] =$row["assigned_date"];$_SESSION["delivered_date"] =$row["delivered_date"];$_SESSION["del_status"] =$row["del_status"]; $_SESSION["courier"] = $row["courier"];
										
										echo "<tr><td>".$row["oId"]."<td>". $row["cName"]."<td>".$row["No"]."<td>".$row["city"]."<td>".$row["province"]."<td>".$row["courier"]."<td>".$row["assigned_date"]."<td>".$row["delivered_date"]."<td>".$row["del_status"]."<td>
										<form method = 'post' action = 'update_courier.php' target = '_self'><input type = 'submit' value = 'update' class = 'btn btn-warning'><td>
										<input type = 'hidden' name = 'oId' value = " .$row["oId"].">
										<input type = 'hidden' name = 'cName' value = " .$row["cName"].">
										<input type = 'hidden' name = 'No' value = " .$row["No"].">
										<input type = 'hidden' name = 'city' value = " .$row["city"].">
										<input type = 'hidden' name = 'province' value = " .$row["province"].">
										<input type = 'hidden' name = 'delivered_date' value = " .$row["delivered_date"].">
										<input type = 'hidden' name = 'assigned_date' value = " .$row["assigned_date"].">
										<input type = 'hidden' name = 'courier' value = " .$row["courier"].">
										</form>
										<form action = 'delete_courier.php' method = 'post'>
										<input type = 'hidden' name = 'oId' value = " .$row["oId"].">
										<input class='btn btn-danger' type='submit' onclick = 'deleteConfirms(event)' value = 'Delete'></form></td></tr>"; }}else{ echo "no results";}  ?>
                                        
											
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
								
								 
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<?php

$_SESSION['success'] = 0;

?>
<!-- end document-->

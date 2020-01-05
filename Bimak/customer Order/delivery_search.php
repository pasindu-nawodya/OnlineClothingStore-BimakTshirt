<?php
require 'config.php';
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$msg = $_POST['msg'];
$success = $_SESSION['success'];

$oid = $_POST["oid"];
$del_date = $_POST["dDate"];
$status = $_POST["status"];


                                       





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
    <title>Search results</title>

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
                            <a href="assign_confirmation.php">
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
				
				<h1 align = "center">Search results</h1>
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

											
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
								
								 
                       
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                            <?php
											$con = new PDO("mysql:host=localhost;dbname=bimak",'root','');
											if (isset($_POST["submit"])) {
													$str = $_POST["search"];
													$sth = $con->prepare("SELECT * FROM `delivery_details` WHERE oId = '$str'");
 
													$sth->setFetchMode(PDO:: FETCH_OBJ);
													$sth -> execute();
													
													if($row = $sth->fetch()){
															$id = $row->oId;
															$cname =$row->cName;
															$no = $row->No;
															$city = $row->city;
															$province = $row->province;
															$empId = $row->empId;
															$empName = $row->empName;
															$city = $row->city;
															$vid = $row->vId;
															$vType = $row->vehicleType;
															$regNo = $row->RegNo;
															$adate = $row->assigned_date;
															$ddate = $row->delivered_date;
															$status = $row->del_status;
															$courier = $row->courier;
																if($courier == null){
																		echo"<table class='table table-borderless table-data3'>
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
												
												
																			</tr></thead>";
											
																			echo "<tr><td>".$id."<td>". $cname."<td>".$no."<td>".$city."<td>".$province."<td>".$empId."<td>".$empName."<td>".$vid."<td>".$regNo."<td>".$vType."<td>".$adate."<td>".$ddate."<td>".$status."</td>
																				<form method = 'post' action = 'update_delivery.php' target = '_self'>
																				<input type = 'hidden' name = 'oId' value = " .$id.">
																				<input type = 'hidden' name = 'cName' value = " .$cname.">
																				<input type = 'hidden' name = 'No' value = " .$no.">
																				<input type = 'hidden' name = 'city' value = " .$city.">
																				<input type = 'hidden' name = 'province' value = " .$province.">
																				<input type = 'hidden' name = 'empId' value = " .$empId.">
																				<input type = 'hidden' name = 'empName' value = " .$empName.">
																				<input type = 'hidden' name = 'vId' value = " .$city.">
																				<input type = 'hidden' name = 'RegNo' value = " .$vid.">
																				<input type = 'hidden' name = 'vehicleType' value = " .$vType.">
																				<input type = 'hidden' name = 'delivered_date' value = " .$regNo.">
																				<input type = 'hidden' name = 'assigned_date' value = " .$adate.">
										

										
																				<td><input type = 'submit' value = 'update' class = 'btn btn-warning'></form><td> <form method = 'post' action = 'delete_delivery.php'><input type = 'hidden' name = 'oId' value = " .$id."><input class='btn btn-danger' type='submit' onclick = 'deleteConfirm(event)' value = 'Delete'></form></td></tr>";
														
														}
														
														else{
															 echo"<div class='table-responsive m-b-40'>
																<table class='table table-borderless table-data3'><table class='table table-borderless table-data3'>
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
																</tr></thead>
											
																<tr><td>".$id."<td>". $cname."<td>".$no."<td>".$city."<td>".$province."<td>".$courier."<td>".$adate."<td>".$ddate."<td>".$status."
																<form method = 'post' action = 'update_courier.php' target = '_self'>
																<input type = 'hidden' name = 'oId' value = " .$id.">
																<input type = 'hidden' name = 'cName' value = " .$cname.">
																<input type = 'hidden' name = 'No' value = " .$no.">
																<input type = 'hidden' name = 'city' value = " .$city.">
																<input type = 'hidden' name = 'province' value = " .$province.">
																<input type = 'hidden' name = 'courier' value = " .$courier.">
																
																<input type = 'hidden' name = 'assigned_date' value = " .$status.">
										

										
																<td><input type = 'submit' value = 'update' class = 'btn btn-warning'></form><td><form action = 'delete_courier.php' method = 'post'><input type = 'hidden' name = 'oId' value = " .$id."><input class='btn btn-danger' type='submit' onclick = 'deleteConfirm(event)' value = 'Delete'>
						
																
																
																</tr></table></div>";
											
  
															
															
															
														}
														
													}
                                                    else{
														echo "<center><img src = 'images/icon/issue-png-3.png' style = 'width:50px;'>No results found for Order '$str'<br></center>";
													}
											}
											
                                              ?>
                                        
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
<?php

$_SESSION['success'] = 0;

?>
</html>

<!-- end document-->

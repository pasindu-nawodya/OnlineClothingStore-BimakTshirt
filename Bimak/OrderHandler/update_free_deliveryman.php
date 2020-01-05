<?php
require 'config.php';
session_start();
error_reporting(0);
$_SESSION["msg"] = 3; 
date_default_timezone_set('Asia/Kolkata');
$emp = $_POST["empId"];
$empName = $_POST["Name"];
$vId = $_POST["vId"];
$rNo = $_POST["RegNo"];
$vType = $_POST["vType"];





?>


<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Update Deliveryman</title>

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
	
	 <script src="js/otherFunctions.js"></script>

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
                        <li >
                            <a href="delivery_details.php">
                                <i class="fas fa-table"></i>Delivery Details</a>
                        </li>
                        <li>
                            <a href="report_generate.php.html">
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
                <div class="section__content section__content--p30" style = "float:center;">
				<h1 align = "center">Update Vehicle-Employee Details</h1><br><br>
                    <div class="container-fluid" style = "float:center;"> 
					
                        <div class="row" style = "float:center;">
                            <div class="col-lg-9" style = "float:center; ">
							
                                <div class="table-responsive table--no-card m-b-30" style = "float:center;">
                                    <!-- FORM -->
								<center>
								 <div style = "width:100%; float:center;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong></strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="deliveryman_update_success.php" method="post" enctype="multipart/form-data" class="form-horizontal">
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Employee Id</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="empId" name="empId"  class="form-control" value = "<?php echo "$emp";?>" >
                                                   
                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Name" name="Name"  class="form-control" value = "<?php echo "$empName";?>" >
                                                   
                                                </div>
                                            </div>
											
											<label style = "color:blue;">Vehicle Details</label><br>
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">Vehicle Id</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="vId" name="vId"  class="form-control" value = "<?php echo "$vId";?>" >
                                                    
                                                </div>
                                                </div>
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">Registration Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="RegNo" name="RegNo"  class="form-control" value = "<?php echo "$rNo ";?>" >
                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Vehicle Type<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="vType" id="vType" class="form-control" value = "<?php echo "$vType";?>>
                                                        <option value="NULL">Please select</option>
                                                        <option value="Motor Bike">Motor Bike</option>
														<option value="Van">Van</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
											<br>
											</div>
											 <div class="card-footer">
											 
                                        <input type="submit" class="btn btn-warning"  value = "Update"> 
                                             
                                       
                                        <button type="reset" class="btn btn-danger">
                                             Reset
                                        </button>
                                    </div>
											
												 
                                            </div>
                                            
                                   
                                </div>
								</div>
								</form>
								</center>
								
								<!--END FORM-->
                                </div>
								
                            </div>
                          
                        </div>
                        <div class="row" align = "right">
                            
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

$_SESSION['success'] = 3;

?>
<!-- end document-->

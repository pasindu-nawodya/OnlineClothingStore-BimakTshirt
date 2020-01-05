<?php
require 'config.php';
session_start();
error_reporting(0);

$_SESSION['success'] = 2;



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
    <title>Assign Courier</title>

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
				<h1 align = "center">Assign Orders For Courier</h1><br><br>
                    <div class="container-fluid">
                        
                           
                                <div class="table-responsive table--no-card m-b-30">
								
                                   <!-- FORM -->
								<center>
								 <div style = "width:65%;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Delivery</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form  action="delivery_details.php"  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                            <input type = "hidden" name = "msg1" value = "2">
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Order Id<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="oId" name="oId"  class="form-control" value = "606"required>
                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Customer Name<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="cName" name="cName"  class="form-control" value = "Abeykoon" required>
                                                    
                                                </div>
                                            </div>
											
											<label style = "color:blue;">Delivery Address</label><br>
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">No<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="no" name="no"  class="form-control"  value = "180/2" required>
                                                    
                                                </div>
                                                </div>
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">City<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="city" name="city"  class="form-control" value = "Ratnapura"required>
                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Province<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="province" id="province" class="form-control">
                                                       
                                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
											<br>
											
											
											
											<label style = "color:blue;">Courier Service Details</label><br>
                                         
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">Courier Service Name<font color = "red">*</font></label>
                                                </div>
                                                 <div class="col-12 col-md-9">
												
                                                    <select name="courier" id = "courier" class="form-control" value = "a" required>
                                                        
                                                        <option value="DHL">DHL</option>
														
                                                       
                                                    </select>
													
													
                                                </div>
                                            </div>
                                            </div>
											
											 <input type = "hidden" name = "msg" value = "2">
											 <div class="card-footer">
                                        <input type="submit" class="btn btn-primary btn-sm">
                                           
                                        
                                        <input type="reset" class="btn btn-danger btn-sm">
                                             
                                        
                                    </div>
											
												 
                                            </div>
                                            
                                   
                                
								</div>
								</form>
								</center>
								<center>
								
								</center>
								<!--END FORM-->
								 
                                </div>
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

$_SESSION['success'] = 2;

?>
<!-- end document-->

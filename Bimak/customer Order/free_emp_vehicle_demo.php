<?php
require 'config.php';
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$_SESSION['msg'] = 0;
 $_SESSION['duplicate'] = 0;

$_SESSION['val'] =4;

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
    <title>Employee-vehicle details</title>

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
    <link href="css/otherCss.css" rel="stylesheet" media="all">
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
                        <li >
                            <a href="order_details.php">
                                <i class="fas fa-chart-bar"></i>Order Details</a>
                        </li>
                        <li>
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
				<h1 align = "center">Employee-vehicle Details</h1>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    
                                </div>
                            </div>
                          
                        </div>
                         
								<h3><img src = 'images/icon/—Pngtree—delivery truck vector icon_3758677.png' style = "width:150px">Free vehicles</h3>
								 
								 <?php
								 
								 $_SESSION['msg'] = 0;
                                             $sql = "SELECT vehicle_id,vreg_no,v_type FROM vehicle where vehicle_id not in (SELECT vId FROM employee_vehicle) ";
                                             $result = $con->query($sql); 
											if($result && $result -> num_rows> 0)
											{ ;
												echo"<!-- DATA TABLE-->
                                <div class='table-responsive m-b-40'>
                                    <table class='table table-borderless table-data3'>
                                        <thead>
                                            <tr>
                                                <th>Vehicle Id</th>
                                                <th>Registration Number</th>
                                                <th>Vehicle Type</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                ";
												
							       while($row = $result -> fetch_assoc()){ $_SESSION["vid"]=$row["vehicle_id"];$_SESSION["vregNo"]=$row["vreg_no"];$_SESSION["vType"]=$row["v_type"];
								   echo " <tr><td>".$row["vehicle_id"]."<td>". $row["vreg_no"]."<td>".$row["v_type"]."</td></tr>
                                           
                                </div>"; }
								
								echo "</table>";
								}else{ echo "<center><img src = 'images/icon/issue-png-3.png' style = 'width:50px;'>There`s no free deliverymans at the moment<br></center>";}  ?>
											
											<h3><img src = 'images/icon/—Pngtree—people vector icon_3710701.png' style = 'width:150px;'>Free Deliverymans</h3>
								 <?php
								$_SESSION['val'] = 7;
                                             $sql = "SELECT Id,Nic,Name FROM employee where Type = 'deliveryman' and (Id not in(SELECT empId FROM employee_vehicle)) ";
                                             $result = $con->query($sql); 
											if($result && $result -> num_rows> 0)
											{ echo "";
												echo"<!-- DATA TABLE-->
                                <div class='table-responsive m-b-40'>
                                    <table class='table table-borderless table-data3'>
                                        <thead>
                                            <tr>
                                                <th>Employee Id</th>
												<th>NIC</th>
                                                <th>Name</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                ";
												
							       while($row = $result -> fetch_assoc()){ $_SESSION["Id"]=$row["Id"];$_SESSION["ename"]=$row["Name"];$_SESSION["nic"]=$row["Nic"];
								   echo " <tr><td>".$row["Id"]."<td>". $row["Nic"]."<td>". $row["Name"]."</td></tr>
                                           
                                </div>"; }
								echo "</table>";
								
								}else{ echo "<center><img src = 'images/icon/issue-png-3.png' style = 'width:50px;'>There`s no free deliverymans at the moment<br></center>";}  ?>
								 
								<br><hr> 
                             </center>
							 <center>
                               <div style = "width:65%; float:center;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Details</strong>
										<p id = "warning"></p>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" action="delivery_assign.php"  enctype="multipart/form-data" class="form-horizontal" target = "_self">
                                            <input type = "hidden" name = "val" value = "4">
											<center><label style = "color:blue;">Employee Details</label></center>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Employee Id<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="eId" name="eId"  class="form-control" value = "5" required>
                                                    
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Employee Name<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="eName" name="eName"  class="form-control" value = "Henadeera" required>
                                                    
                                                </div>
                                            </div>
											
											
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">NIC<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="no" name="nic"  class="form-control" value = "889530640V" required>
                                                    
                                                </div>
                                                </div>
												
												<center><label style = "color:blue;">Vehicle Details</label></center>
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">Vehicle Id<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="vId" name="vId"  class="form-control" value = "120" required>
                                                    
                                                </div>
                                            </div>
											
											<div class="row form-group">
											
                                                <div class="col col-md-3">
												
                                                    <label for="text-input" class=" form-control-label">Registration Number<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Regno" name="Regno"  class="form-control"  value = "500V" required>
                                                    
                                                </div>
												</div>
												 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Vehicle Type<font color = "red">*</font></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="vType" id="vType" class="form-control" required>
                                                       
                                                        <option value="Motor Bike">Motor Bike</option>
													
                                                       
                                                    </select>
                                                </div>
                                            </div>
											
											
											
											
											
                                            
                                         
											
                                            </div>
											
											
											 <center><div class="card-footer">
                                        <input type="submit" class="btn btn-primary btn-sm">
                                           
                                        <?php
                                          $_SESSION['val'] =4;
                                          ?>
                                        <input type="reset" class="btn btn-danger btn-sm">
                                             
                                        
                                    </div></center>
											
												 
                                            </div>
                                            
                                   
                                </div>
                            </div>
							 
                            <div class="col-lg-6">
                               
                            </div>
                         </center>
                        
						
                               
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
$_SESSION["success"] = 4;
?>

<!-- end document-->




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
    <title>Vehicle Details</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       <li >
                            <a href="#" class="js-arrow">
                                <i class="fas fa-list-alt"></i>Stock Handling</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="stock_admin.php">Stock Summary</a>
                                </li>
                                <li>
                                    <a href="add_item.php">Add Item</a>
                                </li>
                                <li>
                                    <a href="list_item.php">Stock Details</a>
                                </li>                                
                            </ul>
                        </li>
                        <li >
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-users"></i>Employee Handling</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="employee_admin.php">Employee Summary</a>
                                </li>
                                <li>
                                    <a href="add_employee.php">Add Employee</a>
                                </li>
                                <li>
                                    <a href="list_employee.php">Employee Details</a>
                                </li>
                                <li>
                                    <a href="sal_employee.php">Salary Calculation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-user"></i>Customer Handling</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customer_admin.php">Customer Summary</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-users"></i>Vehicle Handling</a>
								
								<ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="add_vehicle.php">Add Vehicle</a>
                                </li>
                                <li>
                                    <a href="list_vehicle.php">Vehicle Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_finance.php">
                                <i class="fas fa-keyboard-o"></i>Finance Management</a>
                        </li>
                        <li>
                            <a href="admin_report.php">
                                <i class="fas fa-clipboard"></i>Reports</a>
                        </li>
                        <li>
                            <a href="admin_emp_index.php">
                                <i class="fas fa-unlock-alt"></i>Log out</a>
                        </li>
                    </ul>
                </nav>
            </div>
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
                                <div class="noti-wrap">
                                    
                                   
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">.</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Check E-mails now!</p>
                                                    <span class="date"><?php echo date("y/m/d"); ?> </span>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
								
								<?php

include'dbconnection.php';
/*
if(isset($_POST['submit']))
{
	echo "hi";
       // $vehicle_id = $_POST['vehicle_id'];
       // $vreg_no = $_POST['vreg_no'];
      //  $v_type = $_POST['v_type'];
       // $vdesc =$_POST['vdesc'];
	
	mysqli_query($con,"update vehicle set vehicle_id='1212212c' ,vreg_no='$vreg_no' ,vdesc='HI IAM MAD' where vehicle_id=1212212c ");

}
*/?>
								
                                <?php 

                                     $conn = new mysqli("localhost","root","1234","bimak");

                                    $get_admin = "select * from admin where id = 1";

                                    $run_edit_admin = mysqli_query($conn , $get_admin);
                                    $row_admin = mysqli_fetch_array($run_edit_admin);
                                    $name = $row_admin['name'];
                                    $email = $row_admin['email'];
                                    $photo = $row_admin['aphoto'];
                                    $loc = "php/";                                    

                                    echo "





                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                        <div class='image'>
                                            <img src='$loc$photo'/>
                                        </div>
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#''>$name</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='$loc$photo'/>
                                                    </a>
                                                </div>
                                                <div class='content'>
                                                    <h5 class='name'>
                                                        <a href='#'>$name</a>
                                                    </h5>
                                                    <span class='email'>$email</span>
                                                </div>
                                            </div>
                                            <div class='account-dropdown__body'>
                                                <div class='account-dropdown__item'>
                                                    <a href='admin_account.php'>
                                                        <i class='zmdi zmdi-account'></i>Account</a>
                                                </div>                                                
                                            </div>
                                            <div class='account-dropdown__footer'>
                                                <a href='admin_emp_index.php'>
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="overview-wrap">
                                   <center> <h1><i class="fas fa-list-alt"></i> &nbsp Vehicle Details </h1> </center>
                                </div>
                                <hr><br>                                
                            </div>
                        </div>
                        <?php

                            $conn = new mysqli("localhost","root","1234","bimak");

                            
                            if(isset($_GET['edit'])){

                                    $edit_id = $_GET['edit'];
                                   // $get_veh = "select * from vehicle where vehicle_id = '$edit_id'";
								   $ret=mysqli_query($con,"select * from vehicle where vehicle_id='".$_GET['edit']."'");

                                 //   $run_edit_veh = mysqli_query($conn , $ret);
                                    $row_veh = mysqli_fetch_array($ret);

                                    $vehicle_id = $row_veh['vehicle_id'];
                                    $vreg_no = $row_veh['vreg_no'];
                                    $v_type = $row_veh['v_type'];
                                    $vdesc =$row_veh['vdesc'];
                                    $iphoto = $row_veh['iphoto'];
							  
								   echo "

                                    <center>
                                        <form action='admin_vehicle_update.php' method='post' enctype='multipart/form-data' class='form-horizontal' >
                                            <div style='width:65%;border-radius:25%;'>
                                            <div class='card'>
                                            <div class='card-header'>
                                                <strong>Vehicle Details</strong>
                                            </div>

                                            <div class='card-body card-block'>

                                            <input type='hidden' value='$vehicle_id' name='vehicle_id'>

                                         
                                           <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Vehicle Id</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='vehicle_id' value='$vehicle_id' class='form-control' readonly>
                                                  </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Vehicle Reg Num</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='vreg_no' value='$vreg_no' class='form-control' >
                                                  </div>
                                            </div> 

                                             <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'>Currently Type</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
												    <input type='text' id='text-input' name='v_type' value='$v_type' class='form-control' readonly>
                                                  </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'>Vehicle Type</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
												    <select name='v_type' id='select'  class='form-control'>
                                                        <option value='van'>Van</option>
                                                        <option value='bike'>Bike</option>
                                                    </select>
                                                  </div>
                                            </div>
                                           
                                           <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='textarea-input' class=' form-control-label'>Description</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <textarea name='vdesc' id='textarea-input' rows='9' class='form-control' > $vdesc</textarea>
                                                </div>
                                            </div>
                                           
                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class='form-control-label'>Item Image</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <img align='left' style='border-radius:25px' src='$iphoto' width='200' height='100'>
                                                </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='file-input' class=' form-control-label'></label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='file' id='file-input' name='vfile' class='form-control-file' required>
                                                </div>
                                            </div> 											
                                        
                                    </div>
                                    <div class='card-footer'>
                                        
                                        <input type='submit' name='submit' value='update' class='btn btn-primary btn-sm'>
                                         &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp

                                        <a href='list_vehicle.php'>
                                        <button  class='btn btn-danger btn-sm'>
                                            <i class='fa fa-ban'></i> Back
                                        </button></a>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                        </center>

                          ";        }



                        ?>

                            <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Zanity Web Devs (pvt) Ltd. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
<!-- end document-->

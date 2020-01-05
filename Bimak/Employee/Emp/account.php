<?php 
 session_start();
 require_once 'dbconnection.php'; 
 if(!isset($_SESSION['id'])& empty($_SESSION['id'])) {
  header('location: emp_login.php');
 }

    $id = $_SESSION['id'];
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
    <title>Dashboard</title>

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
                    <img src="images/icon/logo" alt="logo" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       <li class="active has-sub">
                            <a class="js-arrow" href="account.php">
                                <i class="fas fa-user"></i>Account</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="leave.php">
                                <i class="fas fa-wheelchair"></i>Leave</a>
                        </li>
                       <li>
                            <a class="js-arrow" href="loan.php">
                                <i class="fas fa-suitcase"></i>Loan</a>
                        </li>
                        <li>
                            <a href="http://localhost/ITP_Project/Bimak/admin_emp_index.php">
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

                                     $conn = new mysqli("localhost","root","1234","bimak");

                                    $get_admin = "select * from employee where id = $id";

                                    $run_edit_admin = mysqli_query($conn , $get_admin);
                                    $row_admin = mysqli_fetch_array($run_edit_admin);
                                    $name = $row_admin['ename'];
                                    $email = $row_admin['email'];
                                    $photo = $row_admin['image'];
                                                                    

                                    echo "





                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                        <div class='image'>
                                            <img src='$photo'/>
                                        </div>
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#''>$name</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='$photo'/>
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
            <!-- HEADER DESKTOP--><img src="" border="">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
							<div class="overview-wrap">
                                   <center> <h1><i class="fas fa-user"></i> &nbsp Update Account Details</h1> </center>
                                </div>
								<hr><br>
                            </div>
                        </div>

                       <?php

                            $conn = new mysqli("localhost","root","1234","bimak");


                                    //$edit_id = $_GET['edit'];
                                    $get_emp = "select * from employee where id = $id";

                                    $run_edit_emp = mysqli_query($conn , $get_emp);
                                    $row_emp = mysqli_fetch_array($run_edit_emp);

                                    $ids = $row_emp['id'];
                                    $ename = $row_emp['ename'];
                                    $nic = $row_emp['nic'];
                                    $epassword =$row_emp['epassword'];
                                    $dob = $row_emp['dob'];
                                    $email = $row_emp['email'];
                                    $phone = $row_emp['phone'];
                                    $line1 = $row_emp['line1'];
                                    $line2 = $row_emp['line2'];
                                    $type = $row_emp['type'];
                                    $edesc = $row_emp['edesc'];
                                    $gender =$row_emp['gender'];
                                    $image = $row_emp['image'];

                                    echo "

                                    <center>
                                        <form action='emp_update.php' method='post' enctype='multipart/form-data' class='form-horizontal' >
                                            <div style='width:65%;border-radius:25%;'>
                                            <div class='card'>
                                            <div class='card-header'>
                                                <strong>Employee Details</strong>
                                            </div>

                                            <div class='card-body card-block'>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Employee ID</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='id' value='$ids' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Employee Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='ename' value='$ename' class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'>Gender</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input'  value='$gender' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'></label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <select name='gender' id='select' class='form-control'>
                                                        <option value='male'>Male</option>
                                                        <option value='female'>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Emplyee NIC</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='nic' value='$nic' placeholder='Employee NIC ' class='form-control'>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Password</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='epassword' value='$epassword'  class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Date of Birth</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input'  value ='$dob ' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'></label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='dob' value ='$dob ' class='form-control'  >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>E-mail</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='email' id='text-input' name='email' value='$email ' class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Emplyee Phone Number</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='number' id='text-input' name='phone' value='$phone' class='form-control'  >
                                                  </div>
                                            </div>


                                           <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Emplyee Address</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='line1' value='$line1' class='form-control' >
                                                  </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Emplyee Address</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='line2' value='$line2' class='form-control'  >
                                                  </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'>Type</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input'  value='$type' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'> </label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <select name='type' id='select' class='form-control'>
                                                        <option value='diliver'>Delivery</option>
                                                        <option value='Order'>Order Handler</option>
                                                        <option value='cashier'>Cashier</option>
                                                    </select>
                                                </div>
                                            </div>



                                           
                                           <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='textarea-input' class=' form-control-label'>Description</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <textarea name='edesc' id='textarea-input' rows='9' class='form-control' > $edesc</textarea>
                                                </div>
                                            </div>

                                           
                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='file-input' class=' form-control-label'>Profile Photo</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <img src='$image' width='100px' height='100px;' style='border-radius: 50%'>
                                               
                                                    <input type='file' id='file-input' name='image' class='form-control-file' >
                                                </div>
                                            </div>                                       
                                        
                                    </div>
                                    <div class='card-footer'>
                                       
                                        <input name='update' type='submit' value='Update'  class='btn btn-primary btn-sm'>
                                        &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp

                                        <a href='dashboard.php'>
                                        <button  class='btn btn-danger btn-sm'>
                                            <i class='fa fa-ban'></i> Back
                                        </button></a>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                        </center>

                                            ";                                
                                    
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

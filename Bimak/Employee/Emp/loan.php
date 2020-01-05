
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
    <title>Loan</title>

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
                       <li >
                            <a class="js-arrow" href="account.php">
                                <i class="fas fa-user"></i>Account</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="leave.php">
                                <i class="fas fa-wheelchair"></i>Leave</a>
                        </li>
                       <li class="active has-sub">
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
                                   <center> <h1><i class="fas fa-suitcase"></i> &nbsp Loan Details </h1> </center>
                                </div>
                                <hr><br>
                            </div>
                        </div>

                       

                       <?php

                //create connnection
                $conn = new mysqli("localhost","root","1234","bimak");

                if(mysqli_connect_error()){

                    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

                }else{


                    $sql = "select * from loan_details where emp_id=$id";
                    $runsql = mysqli_query($conn, $sql);


                    $tot_loan = 0;

                    while($row = mysqli_fetch_array($runsql)){

                        $loans=$row['amount'];

                        $tot_loan = $tot_loan+$loans;
                                 

                       
                    }


                    $totLoan = 50000-$tot_loan;


                    echo "

                        <div class='overview-wrap'>

                                                 

                            <a href='loan_req.php?id=$id'><button type='button' class='btn btn-outline-primary'>
                                        <i class='fas fa-list-ol'></i> Request Loan</button></a>
                        </div>
                        <br> 

                        <br>
                         <h4>Total Loan : Rs.50 000/=</h4><br> 
                         <h4>Remaining loan: Rs.$totLoan/=</h4> 
                        <br><br>

                         <div class='col-lg-12'>
                                <div class='table-responsive table--no-card m-b-30'>
                                    <table class='table table-borderless table-striped table-earning'>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Amount</th>
                                                <th>Reason</th>
                                                <th>Date</th>                                                
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>                          

                                        <tbody>
                        ";

                    $sql = "select * from loan_details where emp_id = $id";
                    $runsql = mysqli_query($conn, $sql);


                    while($row = mysqli_fetch_array($runsql))
                    {
                        $id = $row['loan_id'];
                        $amount = $row['amount'];
                        $reason = $row['reason'];
                        $loanDate = $row['loanDate'];
                        $status = $row['status'];

                    echo "
                            <tr>
                                <td>$id</td>
                                <td>$amount</td>
                                <td>$reason</td>
                                <td>$loanDate</td>
                                <td>$status</td>
                                
                                <td>

                                    <div class='table-data-feature'>
                                    <a href='php/loan_delete.php?del=$id'>
                                        <button class='item' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class='zmdi zmdi-delete'></i>
                                        </button>
                                    </a>
                                    </div>
                                </td>

                            </tr>

                        ";
                    }

                    echo "
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        ";
                    }
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

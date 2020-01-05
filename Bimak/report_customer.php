<?php
session_start();
require_once 'config/connect.php';

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
    <title>Generate Report</title>

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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       <li>
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
                        <li>
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-users"></i>Employee Handling</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="employee_admin.php">Employee Summary</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active has-sub">
                            <a  class="js-arrow"  href="#">
                                <i class="fas fa-user"></i>Customer Management</a>
                                
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customer_admin.php">Customer Summary</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin_vehicle.php">
                                <i class="fas fa-keyboard-o"></i>Vehicle Management</a>
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
                                                <h1 align = "center">Generate Report</h1>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <div class="table-responsive table--no-card m-b-30">

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

                                                <!-- FORM -->
                                                <div class="content-blog">
                                                    <div class="container">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Lastname Name</th>
                                                                    <th>timestemp</th>
                                                                    <th>telephone</th>
                                                                    <th>email</th>
                                                                    <th>cphoto</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php   
                                                                $sql = "SELECT * FROM users";
                                                                $res = mysqli_query($connection, $sql); 





                                                                $count=0;
                                                                while ($r = mysqli_fetch_assoc($res)) {
                                                                   $count=$count+1;

                                                                   ?>
                                                                   <tr>
                                                                    <th scope="row"><?php echo $r['id']; ?></th>
                                                                    <td><?php echo $r['firstname']; ?></td>
                                                                    <td><?php echo $r['lastname']; ?></td>
                                                                    <td><?php echo $r['timestemp']; ?></td>
                                                                    <td><?php echo $r['telephone']; ?></td>
                                                                    <td><?php echo $r['email']; ?></td>
                                                                    <td><?php if($r['cphoto']){ echo "Yes";}else{echo "No";} ?></td>
                                                                    <td><a href="delcus.php?del=<?php echo $r['id']; ?>">Delete</a></td>
                                                                </tr>

                                                            <?php } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <h4>Total customer : <?php echo $count; ?></h4> 


                                            <div id="piechart" style="width: 900px; height: 500px;"></div>






                                        </div>



                                        <?php   
                                        $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid  ORDER BY o.id DESC";
                                        $res = mysqli_query($connection, $sql); 


                                        ?>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script type="text/javascript">
                                          google.charts.load('current', {'packages':['corechart']});
                                          google.charts.setOnLoadCallback(drawChart);

                                          function drawChart() {

                                            var data = google.visualization.arrayToDataTable([
                                               
                                                    ['time', 'Price'],


                                                <?php  while ($r = mysqli_fetch_array($res)) { 



                                                    echo "[' ".$r["totalprice"]." ', ".$r["timestamp"]." ],";



                                                } ?>  



                                                ]);

                                            var options = {
                                              title: 'My Daily Activities'
                                          };

                                          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                          chart.draw(data, options);
                                      }
                                  </script>
                                  <!------------------------------------->
                                   


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
    <!-- end document-->

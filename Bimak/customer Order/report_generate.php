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
                                    <li class = "active">
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
                                                <div class="container">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php   
                                                            $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid  ORDER BY o.id DESC";
                                                            $res = mysqli_query($connection, $sql); 
                                                            $total = 0;
                                                            $count=0;
                                                            while ($r = mysqli_fetch_assoc($res)) {
                                                                ?>


                                                                <?php 
                                                                $count=$count+1;
                                                                $total = $total + ($r['totalprice']);


                                                                ?>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>



                                                    <?php   
                                                    $sql = "SELECT * FROM orderitems ";
                                                    $res = mysqli_query($connection, $sql); 
                                                    $counti=0;
                                                    $countQ=0;
                                                    while ($r = mysqli_fetch_assoc($res)) {
                                                        $r['pquantity'];
                                                        $countQ=$countQ+$r['pquantity'];
                                                        $counti=$counti+1;


                                                    } ?>




                                                    <?php   
                                                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'Cancelled' ORDER BY o.id DESC";
                                                    $res = mysqli_query($connection, $sql); 
                                                    $count_cancel = 0;

                                                    while ($r = mysqli_fetch_assoc($res)) {

                                                     $count_cancel=$count_cancel+1;


                                                 }

                                                 ?>












                                                 <div class="row m-t-25">
                                                   <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span>Totle Earn:</span> </h3>
                                                                    <h2> Rs <?php echo $total; ?>.00/-</h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart1"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span> Totle orders :</span> </h3>

                                                                    <h2><?php echo $count; ?></h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart2"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span>  Totle order Items :</span> </h3>

                                                                    <h2> <?php echo $counti; ?></h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart3"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span>  Totle  Qty of order items : </span> </h3>

                                                                    <h2> <?php echo $countQ; ?></h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart4"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span>  Totle of Cancel orders : </span> </h3>

                                                                    <h2>  <?php echo $count_cancel; ?></h2>

                                                                    <h3> <span>  Totle of Cancel orders percentage : </span> </h3>

                                                                    <h2>  <?php 
                                                                        $pers=0;
                                                                    echo $pers=   ( $count_cancel/$count )*100; ?>%</h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart3"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6 col-lg-3">
                                                    <div class="overview-item overview-item--c1">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">

                                                                <div class="text">
                                                                    <h3> <span>  AVG of salls: </span> </h3>

                                                                    <h2>  <?php 

                                                                        $avg=0;
                                                                    echo $avg = $total / ($countQ);


                                                                     ?></h2>

                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart3"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>





                                        <div id="sellsqty" style="width: 900px; height: 500px;"></div> 
                                        <div id="piechart2" style="width: 900px; height: 500px;"></div>







                                    </div>






<!------------------------------------------------------------------------------------------------------------------------->


                                    <?php   
                                    $sql = "SELECT * FROM  usersmeta ";
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



                                                echo "[' ".$r["firstname"]." ', ".$r["usertotal"]." ],";



                                            } ?>  





                                            ]);

                                        var options = {
                                          title: 'Customer Buying Rate',
                                           is3D:true
                                      };

                                      var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                                      chart.draw(data, options);
                                  }
                              </script>
<!----------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------Item salling rate--------------------------------------------------------------------->
                              <?php   
                              $sql = "SELECT * FROM   products ";
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



                                            echo "[' ".$r["name"]." ', ".$r["sellqty"]." ],";



                                        } ?>  





                                        ]);

                                    var options = {
                                      title: 'product Salling Rate',
                                      is3D:true
                                  };

                                  var chart = new google.visualization.PieChart(document.getElementById('sellsqty'));

                                  chart.draw(data, options);
                              }
                          </script>

<!----------------------------------------------------------------------------------------------------------------------->
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

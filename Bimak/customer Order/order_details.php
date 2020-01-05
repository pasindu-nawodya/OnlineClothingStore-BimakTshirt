<?php 
    session_start();
    require_once 'config/connect.php'; 
    if (!isset($_SESSION['username'])& empty($_SESSION['username'])) {
        header('location: co_login.php');
    }
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
    <title>Order Details</title>

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

    <style >
        
        
.tablink {
  background color: : #00ff59;
  color: black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 20%;
}

.tablink:hover {
     color: #FF5733 ;
 background color: : #00ff59;
}


/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;

  

}
    </style>
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
                        <li class="active">
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
				<h1 ><img src = "images/icon/polo-shirt (1).png">Order Details</h1>
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
                    
                                <!-- DATA TABLE-->
                              
                                <!-- END DATA TABLE-->
								
                               <div class="content-blog">



            <button class="tablink" onclick="openPage('Orders', this, 'white')" id="defaultOpen">Recent Orders</button>
            <button class="tablink" onclick="openPage('progress', this, 'white')" >In progress</button>
            <button class="tablink" onclick="openPage('Contact', this, 'white')">Dispatched Orders</button>
            <button class="tablink" onclick="openPage('News', this, 'white')" >Delivered Orders</button>
            <button class="tablink" onclick="openPage('Cancel', this, 'white')">Cancel Orders</button>



        <div id="Orders" class="tabcontent">
        <div class="container">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Payment Mode</th>
                        <th>Order Placed On</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'Order Placed' ORDER BY o.id DESC";
                    $res = mysqli_query($connection, $sql); 
                    while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['orderstatus']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['timestamp']; ?></td>
                        <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>


<div id="progress" class="tabcontent">
        <div class="container">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Payment Mode</th>
                        <th>Order Placed On</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'in progress' ORDER BY o.id DESC";
                    $res = mysqli_query($connection, $sql); 
                    while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['orderstatus']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['timestamp']; ?></td>
                        <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>







<div id="News" class="tabcontent">
    


    <div class="container">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Payment Mode</th>
                        <th>Order Placed On</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'Delivered' ORDER BY o.id DESC";
                    $res = mysqli_query($connection, $sql); 
                    while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['orderstatus']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['timestamp']; ?></td>
                        <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>





    </div>

<div id="Contact" class="tabcontent">
    <div class="container">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Payment Mode</th>
                        <th>Order Placed On</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'Dispatched' ORDER BY o.id DESC";
                    $res = mysqli_query($connection, $sql); 
                    while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['orderstatus']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['timestamp']; ?></td>
                        <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>                  
    

<div id="Cancel" class="tabcontent">
    <div class="container">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Payment Mode</th>
                        <th>Order Placed On</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                    $sql = "SELECT o.id, o.totalprice, o.orderstatus, o.paymentmode, o.`timestamp`, u.firstname, u.lastname FROM orders o JOIN usersmeta u WHERE o.uid=u.uid and o.orderstatus = 'Cancelled' ORDER BY o.id DESC";
                    $res = mysqli_query($connection, $sql); 
                    while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['orderstatus']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['timestamp']; ?></td>
                        <td><a href="order-process.php?id=<?php echo $r['id']; ?>">Process Order</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>
    </div>  

    </div>











</div>

								</center>
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
<script>
            function openPage(pageName,elmnt,color) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].style.backgroundColor = "";
                }
                document.getElementById(pageName).style.display = "block";
                elmnt.style.backgroundColor = color;
            }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>

</html>
<!-- end document-->

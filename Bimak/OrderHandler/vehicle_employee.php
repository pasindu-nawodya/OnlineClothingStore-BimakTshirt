<?php
require 'config.php';
session_start();





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
    <title>Employee-vehicle Records</title>

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
	
	 <script src="js/otherFunctions.js"></script>
	 
	<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
				<h1 align = "center">Employee-vehicle Details</h1>
				
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    
                                </div>
                            </div>
                          
                        </div>
                        <div class="row" align = "right">
                            
                               
                            </div>
							 
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
						
                                        
						
						 
								
                                
								 <!-- DATA TABLE-->
							
								 
								 <h3><img src = 'images/icon/—Pngtree—delivery truck vector icon_3758677.png' style = "width:150px">Free vehicles</h3>
								 <?php
								 
								 
                                             $sql = "SELECT * FROM vehicle ";
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
												
							       while($row = $result -> fetch_assoc()){ echo " <tr><td>".$row["vehicle_id"]."<td>". $row["vreg_no"]."<td>".$row["v_type"]."</td></tr>
                                           
                                </div>"; }}else{ echo "<p>Newly Added Vehicles<p><br>'<center>
								 <div class='square'>
									<div class='content'>
									<br>
											<strong style = 'font-size:30px;font-family:Georgia'>There`s no new records for newly added vehicles</strong>
											</div>
											</div>
											</center>";}  ?>
								 
                                <!-- END DATA TABLE-->
								
								
								 <!-- DATA TABLE-->
								 
								 <h3><img src = 'images/icon/—Pngtree—delivery truck vector icon_3758677.png' style = "width:150px">Free Deliverymans</h3>
								 <?php
								
                                             $sql = "SELECT * FROM new_employee ";
                                             $result = $con->query($sql); 
											if($result && $result -> num_rows> 0)
											{ echo "<h4>Newly Appointed Deliverymans</h4><br>";
												echo"<!-- DATA TABLE-->
                                <div class='table-responsive m-b-40'>
                                    <table class='table table-borderless table-data3'>
                                        <thead>
                                            <tr>
                                                <th>Employee Id</th>
                                                <th>Name</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        
                                ";
												
							       while($row = $result -> fetch_assoc()){ echo " <tr><td>".$row["empId"]."<td>". $row["Name"]."</td></tr>
                                           
                                </div><form method = 'post' action = 'add_vehicleForEmployee.php' target = '_blank' align = 'right'>
								<input type = 'submit' value = 'Add Records' class = 'btn btn-outline-secondary btn-lg active'/>
								</form>"; }}else{ echo "";}  ?>
								 
								 
								
								
							
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

</html>
<!-- end document-->

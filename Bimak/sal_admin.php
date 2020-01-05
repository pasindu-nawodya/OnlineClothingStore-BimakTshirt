
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
    <title>Salary Calculation</title>

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
                                <i class="fas fa-list-alt"></i>Stock Management</a>
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
                        <li class="active has-sub">
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
                                    <a href="salary_calc.php">Salary Calculation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
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
                                   <center> <h1> </h1> </center>
                                </div>
                                <hr><br>                                
                            </div>
                        </div>                   

					<?php

		$host = "localhost";
		$userName = "root";
		$password = "1234";
		$dbName = "bimak";
		// Create database connection
		$conn = new mysqli($host, $userName, $password, $dbName);
		// Check connection
		if ($conn->connect_error) {
			
				die("Connection failed: " . $conn->connect_error);
			}


        if(isset($_POST['submit'])){
                                        
            
        $empID = $_POST['empID'];       
        $basic = $_POST['basic'];
        $bonus = $_POST['bonus'];
        $bonusType = $_POST['bonusType'];
        $deduction = $_POST['deduction'];
        $deductionType = $_POST['deductType'];
        $total = $_POST['tot'];
        $sdate = $_POST['sdate'];
        
        
        //$tot = $basic + $bonus;
        
        
        $sql = " INSERT INTO salary (empID, basic ,bonus,bonusType,deduction,deductionType,total, sdate) VALUES ('$empID' , '$basic', '$bonus' , '$bonusType' , '$deduction' , '$deductionType' , '$total', '$sdate') ";
        


        if($conn->query($sql) == true){
        echo "Records inserted successfully.";
    
    
        //echo "<a href='empDisplay.php' > <br><br>Go Back</a>";
        echo "<script>window.open('/ITP_Project/Bimak/employee_admin.php','_self')</script>";
        



    } 

    else{
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
}
			
	if(isset($_POST['calcSlary']))
    {
											$empid = $_POST['empID'];
											$deduction = $_POST['deduction'];
											$bonus = $_POST['bonus'];
											$basic = $_POST['basic'];
                                            $bonusType = $_POST['bonusType'];
                                            $deductType = $_POST['deductionType'];
                                            $sdate = $_POST['sdate'];

											$tot = ($bonus+$basic)-$deduction;
											
											
											echo "
											
											<center>

                         <form action='sal_admin.php' method='post' enctype='multipart/form-data' class='form-horizontal' >
                        <div style='width:65%;border-radius:25%;'>
                                <div class='card'>
                                    <div class='card-header'>
                                        <strong>Salary Calculation Summary</strong>
                                    </div>
                                    <div class='card-body card-block'>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Employee ID</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='empID' value='$empid' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>
									
											<div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Basic Salary</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='basic' value='$basic' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Bonus</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='bonus' value='$bonus' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Deductions</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='deduction' value='$deduction' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>
											 									
											
											
											 <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Net Salary </label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='tot' value='$tot' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Bonus Type </label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='bonusType' value='$bonusType' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Deductions Type </label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='deductType' value='$deductType' class='form-control' readonly>
                                                  </div>
                                                
                                            </div>

                                               <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Date </label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='date' id='text-input' name='sdate' value='$sdate'  class='form-control' required>
                                                  </div>
                                            </div>

                                           
										    <input type='hidden' name='total' class='form-control'>
											<input type='hidden' name='netSal' class='form-control'>

                                           


                                    </div>
									  
                                   
										 
									<div class='card-footer'>
									
                                        &nbsp  
										
                                        <input type='submit' name='submit' class='btn btn-primary btn-sm' value='Set Salary'>
										
										&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
                                        
                                    </div>
									
								
                                </div>
                                
                            </div>
                        </form>
                        </center>
											
											
											";
											
										
										}
	
	//$get_user = "select empID from salary";
	
	//$run_user = mysqli_query($conn, $get_user); 
	
	//$row_user = mysqli_fetch_array($run_user);
	

	// Close connection
	$conn->close();
	
	
	
	
										
									
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



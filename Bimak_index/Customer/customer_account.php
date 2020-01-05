<?php
	session_start();
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
    <title>Customer Profile</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside style=" width: 300px;
                        position: fixed;
                        left: 0;
                        top: 0;
                        bottom: 0;
                        background: #F9F9F9;
                        overflow-y: auto;
                        height: 100vh;
                        -webkit-transition: all 0.5s ease;
                        -o-transition: all 0.5s ease;
                        -moz-transition: all 0.5s ease;
                        transition: all 0.5s ease;
                        z-index: 1000;">
            <div style="height: 75px;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    -moz-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    background: #000000;
                    padding: 0 35px;">
                <a href="#">
                    <h1 style="color:#fff">Bimak</h1>
                </a>
            </div>
            <div class="menu-sidebar2_content">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="customer/<?php echo $_SESSION['cphoto'];?>" alt="John Doe" />
                    </div>
                    <h4 class="name"><?php echo $_SESSION['firstname'];?></h4>
                    <a href="php/customer_logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </li>
                                <li>
                                    <a href="">
                                         <i class="zmdi zmdi-email"></i>Email</a>
                                </li>
                                <li>
                                    <a href="">
                                         <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                </li>
                        
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header  style="height: 75px;background: #000000;position: fixed;z-index: 1001;top: 0;right: 0;left: 300px;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">                         
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Account</li>
                                        </ul>
                                    </div>
                                    <a href="customer_update.php">
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        update profile</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <section>
                                <!-- USER DATA-->
                                <center>
                                <div class="user-data m-b-40">
                                        <center>
                                        <form action='' method='post' enctype='multipart/form-data' class='form-horizontal' >
                                            <div style='width:65%;border-radius:25%;'>
                                            <div class='card'>
                                            <div class='card-header'>
                                                <strong><h2><i class="zmdi zmdi-account-calendar"></i> User Details<h2></strong>
                                            </div>

                                            <div class='card-body card-block'>
                                            
                                            <input type="hidden" name="cid" value="<?php echo $_SESSION['cid'];?>">

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>First Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='firstname' value='<?php echo $_SESSION['firstname'];?>' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Last Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='lastname' value='<?php echo $_SESSION['lastname'];?>' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Address</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='address' value='<?php echo $_SESSION['address'];?>' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class='form-control-label'>Telephone</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='number' id='text-input' name='telephone' value='<?php echo $_SESSION['telephone'];?>' class='form-control' readonly>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class='form-control-label'>Email</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='email' id='text-input' name='email' value='<?php echo $_SESSION['email'];?>' class='form-control' readonly>
                                                  </div>
                                            </div>
                                            
                                            
                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class='form-control-label'>Password</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='password' id='text-input' name='password' value='<?php echo $_SESSION['password'];?>' class='form-control' readonly>
                                                </div>
                                            </div>                                    
                                                                    
                                  			<div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Profile Photo</label>
                                                </div>
                                                <img src="custtomer/<?php echo $_SESSION['cphoto'] ?>" width='100px' height='100px' style='border-radius:50px'><br>
                                            <br>
                                            </div>                                                                         		    
                                                                                                                        
                                            </div>
                                            <div class='card-footer'>
                                            <a href="customer_update.php">
                                            <input type='button' class='btn btn-primary btn-sm' value='Update'>
                                            </a>
                                                 &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
                                            <input type='reset' class='btn btn-danger btn-sm'>
                                            </div>
                                            </div>
                                            </div>
                                        </form>
                                    </center>     
                                <!-- END USER DATA-->
                                </div>
                            </center>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 Zanity Web Devs (pvt) Ltd. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php 

session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 

 ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
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
                                                <img src="<?php echo $_SESSION['cphoto'] ?>" width='100px' height='100px' style='border-radius:50px'><br>
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
</div>
                <?php include'inc/footer.php';?>
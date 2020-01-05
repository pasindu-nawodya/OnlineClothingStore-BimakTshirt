<?php 
 
    require_once 'config/connect.php'; 
   
    if (isset($_GET) & !empty($_GET)) {
        $id = $_GET['id'];
    }else{
            header('location: list_item.php');
    }
    if(isset($_POST) & !empty($_POST)){
        $prodname = mysqli_real_escape_string($connection, $_POST['productname']);
        $description = mysqli_real_escape_string($connection, $_POST['productdescription']);
        $category = mysqli_real_escape_string($connection, $_POST['productcategory']);
        $price = mysqli_real_escape_string($connection, $_POST['productprice']);
         $tsize = mysqli_real_escape_string($connection, $_POST['tsize']);

        if(isset($_FILES) & !empty($_FILES)){
            $name = $_FILES['productimage']['name'];
            $size = $_FILES['productimage']['size'];
            $type = $_FILES['productimage']['type'];
            $tmp_name = $_FILES['productimage']['tmp_name'];

            $max_size = 10000000;
            $extension = substr($name, strpos($name, '.') + 1);

            if(isset($name) && !empty($name)){
                if(($extension == "jpg" || $extension == "jpeg" || $extension == "png"|| $extension == "PNG") && ($type == "image/PNG" ||$type == "image/png" || $type == "image/jpeg") && $size<=$max_size){
                    $location = "upload/";
                    $filepath = $location.$name;
                    if(move_uploaded_file($tmp_name, $filepath)){
                        $smsg = "Uploaded Successfully";
                    }else{
                        $fmsg = "Failed to Upload File";
                    }
                }else{
                    $fmsg = "Only JPG files are allowed and should be less that 1MB";
                }
            }else{
                $fmsg = "Please Select a File";
            }
        }else{
            
        }   

        
        $sql = "UPDATE products SET name='$prodname', description='$description', categoryid='$category', price='$price',thumbneil='$filepath', size='$tsize' WHERE id = $id";
        $res = mysqli_query($connection, $sql);
        if($res){
            $smsg = "Product Updated";
        }else{
            $fmsg = "Failed to Update Product";
        }
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
    <title>Update Item</title>

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
                       <li class="active has-sub">
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
                                   <center> <h1><i class="fas fa-rotate-right (alias)"></i> &nbsp Update Item </h1> </center>
                                </div>
								<hr><br>                                
                            </div>
                        </div>




						<?php

							$conn = new mysqli("localhost","root","1234","bimak");

							
							if(isset($_GET['id'])){

									$edit_id = $_GET['id'];
									$get_item = "select * from products where id = '$edit_id'";

									$run_edit_item = mysqli_query($conn , $get_item);
									$row_item = mysqli_fetch_array($run_edit_item);

									
									?>

                                    <center>
										<form  method='post' enctype='multipart/form-data' class='form-horizontal' >
                                            <div style='width:65%;border-radius:25%;'>
                                            <div class='card'>
                                            <div class='card-header'>
                                                <strong>Update Item</strong>
                                            </div>

											<div class='card-body card-block'>

                                            <input type='hidden' value='$id' name='id'>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Item Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='productname' value='<?php echo $row_item['name']; ?>' class='form-control' required>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Unit Price</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='number' id='text-input' name='productprice' value="<?php echo $row_item['price']; ?>" class='form-control' required>
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class='form-control-label'>Quantity</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='number' id='text-input' name='qty' value="<?php echo $row_item['qty']; ?>" class='form-control' required>
                                                  </div>
                                            </div>
                                            

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class='form-control-label'>Item size</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' value="<?php echo $row_item['size']; ?>"  class='form-control' readonly>
                                                </div>
                                            </div> 

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class=' form-control-label'></label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <select id='select' name='tsize' class='form-control'>
                                                        <option value="Small">Small</option>
                                                        <option value="Medium">Medium</option>
                                                        <option value="Large">Large</option>
                                                    </select>
                                                </div>
                                            </div>

                                       

                                                 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Item category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" id="productcategory" name="productcategory">
                                       
                                    
                                           <option value="">---SELECT CATEGORY---</option>
                                              <?php     
                                                         $catsql = "SELECT * FROM category";
                                                         $catres = mysqli_query($connection, $catsql); 
                                                         while ($catr = mysqli_fetch_assoc($catres)) {
                                                  ?>
                                          <option value="<?php echo $catr['id']; ?>" <?php if( $catr['id'] == $row_item['categoryid']){ echo "selected"; } ?>><?php echo $catr['categoryname']; ?></option>
                                                 <?php } ?>
                                                              </select>
                                                </div>
                                            </div>

                                           <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='textarea-input' class='form-control-label'>Description</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <textarea name='productdescription' id='textarea-input' rows='9' class='form-control'><?php echo $row_item['description']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class='form-control-label'>Item Image</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                 
                                                </div>
                                            </div> 

                                           
                                              <div class="form-group">
                <label for="productimage">Product Image</label>
                <br>
                <?php if(isset($row_item['thumbneil']) & !empty($row_item['thumbneil'])){?>
                <img src="<?php echo $row_item['thumbneil']?>" width="100px" height="100px">
                <a href="delprodimg.php? id=<?php echo  $row_item['id']; ?>">
                     <input type="text" name="productimage" id="productimage" value="<?php echo $row_item['thumbneil']; ?>" >
                Delete Image</a>
            <?php }else{ ?>
                <input type="file" name="productimage" id="productimage" required>
                <p class="help-block">Only jpg/png are allowed.</p>
            <?php } ?>
              </div>                                         
                                        
                                    </div>
                                    <div class='card-footer'>
                                        <input type='submit' class='btn btn-primary btn-sm' value='submit'>
                                            
                                         &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp

                                         <a href='list_item.php'>
                                        <button type='reset' class='btn btn-danger btn-sm'>
                                            <i class='fa fa-ban'></i> Back
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                        </center>

											

                                              
									
						
                        <?php			}




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

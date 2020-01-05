

<?php
ob_start();
session_start();
require_once 'config/connect.php'; 
if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) {
    header('location: login.php');
}

include 'inc/header.php'; 
include 'inc/nav.php';

$uid = $_SESSION['customerid'];
if (isset($_GET) & !empty($_GET)) {
        $id = $_GET['id'];
    }else{
            header('location: myaccount.php');
    }

if(isset($_POST) & !empty($_POST)){
        
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);  
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        
        if(isset($_FILES) & !empty($_FILES)){
            $name = $_FILES['productimage']['name'];
            $size = $_FILES['productimage']['size'];
            $type = $_FILES['productimage']['type'];
            $tmp_name = $_FILES['productimage']['tmp_name'];

            $max_size = 10000000;
            $extension = substr($name, strpos($name, '.') + 1);

            if(isset($name) && !empty($name)){
                if(($extension == "jpg" || $extension == "jpeg" || $extension == "png"|| $extension == "PNG") && ($type == "image
                    /PNG" ||$type == "image/png" || $type == "image/jpeg") && $size<=$max_size){
                    $location = "images/customer/";
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

        $usql = "UPDATE users SET  firstname='$firstname', lastname='$lastname', telephone='$telephone', email='$email',cphoto='$filepath'
         WHERE id=$uid";
            $ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
        
      
        if($ures){
             header("location: customer_update.php");
            $smsg = "Product Updated";
        }else{
            $fmsg = "Failed to Update Product";
        }

            
}

$sql = "SELECT * FROM users WHERE id=$uid";
                                            $res = mysqli_query($connection, $sql);
                                            $r= mysqli_fetch_assoc($res);
                                    
?>

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
                        <img src="<?php echo $r['cphoto']?>" alt="John Doe" />
                    </div>
                    <h4 class="name"></h4>
                    <a href="php/customer_logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            
                                <li>
                                    <a>
                                        <i class="zmdi zmdi-account">   <button class="" onclick="openPage('Contact', this, 'white')" id="defaultOpen">Account details</button></i></a>
                                </li>
                                <li>
                                     <a >
                                    <i class="zmdi zmdi-money-box"><button class="" onclick="openPage('Home', this, 'white')">Recent Orders</button>
                                </i></a>
                                </li>
                                <li>
                                    <a>
                                        <i class="zmdi zmdi-money-box"><button  onclick="openPage('News', this, 'white')" >Billing Address</button></i></a>
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
     
            
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
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

            

                    <div id="Contact" class="tabcontent">
                        
                    
                                <center>
                                <div class="user-data m-b-40">
                                    
                                        <center>
                                        <form method='post'  enctype="multipart/form-data" class='form-horizontal' >
                                            <div style='width:65%;border-radius:25%;'>
                                            <div class='card'>
                                            <div class='card-header'>
                                                <strong><h2><i class="zmdi zmdi-account-calendar"></i> User Details<h2></strong>
                                            </div>
                                            <input type="hidden" name="filepath" value="<?php echo $r['cphoto']; ?>">
                                            <div class='card-body card-block'>
                                            
                                            <input type="hidden" name="cid" value="">

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>First Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='firstname'  value="<?php if(!empty($r['firstname'])){ echo $r['firstname']; } elseif(isset($firstname)){ echo $firstname; } ?>" class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class=' form-control-label'>Last Name</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='text' id='text-input' name='lastname' value="<?php if(!empty($r['lastname'])){ echo $r['lastname']; } elseif(isset($lastname)){ echo $lastname; } ?>" class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class='form-control-label'>Telephone</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='number' id='text-input' name='telephone' value="<?php if(!empty($r['telephone'])){ echo $r['telephone']; } elseif(isset($telephone)){ echo $telephone; } ?>" class='form-control' >
                                                  </div>
                                            </div>

                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='text-input' class='form-control-label'>Email</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='email' id='text-input' name='email' value="<?php if(!empty($r['email'])){ echo $r['email']; } elseif(isset($email)){ echo $email; } ?>"  class='form-control' >
                                                  </div>
                                            </div>
                                            
                                            
                                            <div class='row form-group'>
                                                <div class='col col-md-3'>
                                                    <label for='select' class='form-control-label'>Password</label>
                                                </div>
                                                <div class='col-12 col-md-9'>
                                                    <input type='password' id='text-input' name='password' value='' class='form-control' readonly>
                                                </div>
                                            </div>                                    
                                                                    
                                              <div class="form-group">
                <label for="productimage">Product Image</label>
                <br>
                <?php if(isset($r['cphoto']) & !empty($r['cphoto'])){?>
                <img src="<?php echo $r['cphoto']?>" width="100px" height="100px">
                <a href="proimagedel.php? id=<?php echo  $r['id']; ?>">Delete Image</a>
            <?php }else{ ?>
                <input type="file" name="productimage" id="productimage">
                <p class="help-block">Only jpg/png are allowed.</p>
            <?php } ?>
              </div>                                        
                                                                                                                        
                                            </div>
                                            <div class='card-footer'>
                                            <a href="customer_update.php">
                                            <input type="submit" class='btn btn-primary btn-sm'>
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
                            </div>

            </section>

         
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<!-- SHOP CONTENT -->














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


<div class="clearfix space70"></div>
<?php include'inc/footer.php';?>
 

 <?php
    ob_start();
    session_start();
    require_once '../config/connect.php';
   
    

if(isset($_POST) & !empty($_POST)){
        $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        $id = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);

            echo $ordprcsql = "INSERT INTO ordertracking (orderid, status, message) VALUES ('$id', '$status', '$message')";
            $ordprcres = mysqli_query($connection, $ordprcsql) or die(mysqli_error($connection));
            if($ordprcres){
                $ordupd = "UPDATE orders SET orderstatus='$status' WHERE id=$id";
                if(mysqli_query($connection, $ordupd)){
                    header('location: order_details.php');
                }
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
    <title>Delivery Details</title>

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
	 <script>

 

function deleteConfirm(event) {
   
  var r = confirm("Are you sure?");
  if (r == true) {
	  
    window.location = "delete_delivery.php";
  } else  {
    event.preventDefault();
  }

}
</script>
<script>
function deleteConfirms(event) {
   
  var r = confirm("Are you sure?");
  if (r == true) {
	 
    window.location = "delete_courier.php";
  } else  {
   event.preventDefault();
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
                        <li class="active">
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
                <div class="content-blog">
                    <div class="page_header text-center">
                        <h2>Admin - Order Processing</h2>
                        <!-- <p>Do you want to cancel Order?</p> -->
                    </div>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #FA6F51  ;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>









<form method="post" >
<div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-3">
                    <div class="billing-details">
                        <h3 class="uppercase">Order Processing</h3>

                <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        
                        <th>Order</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Payment Mode</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    if(isset($_GET['id']) & !empty($_GET['id'])){
                        $oid = $_GET['id'];
                    }else{
                        header('location: orders.php');
                    }
                    $ordsql = "SELECT * FROM orders WHERE id='$oid'";
                    $ordres = mysqli_query($connection, $ordsql);
                    while($ordr = mysqli_fetch_assoc($ordres)){
                ?>
                    <tr>
                        <?php $uid=$ordr['uid']; ?>
                        <?php $oid=$ordr['id']; ?>
                        <td>
                            <?php echo $ordr['id']; ?>
                        </td>
                        <td>
                            <?php echo $ordr['timestamp']; ?>
                        </td>
                        <td>
                            <?php echo $ordr['orderstatus']; ?>         
                        </td>
                        <td>
                            <?php echo $ordr['paymentmode']; ?>
                        </td>
                        <td>
                            INR <?php echo $ordr['totalprice']; ?>/-
                        </td>
                    </tr>
                        <input type="hidden" name="uid" value="<?php echo $uid ?>"> 
                <?php } ?>
                </tbody>
            </table>    
            <?php
                     $ordsql = "SELECT * FROM users WHERE id='$uid'";
                    $ordres = mysqli_query($connection, $ordsql);
                    $user = mysqli_fetch_assoc($ordres) 


                    ?>
                    <?php  $user['email']; ?>
                    <?php  $user['firstname']; ?>

                    

                            <br>
                        <div class="space30"></div>
                            <label class=""><b>Chenge Order Status : </b></label><br><br>
                        
                                <a >In Progress  :</a>
                                <label class="switch">
                                <input type="radio" value="In Progress" name="status">
                                <span class="slider round"></span>
                                </label>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a >Dispatched   :</a>
                                <label class="switch">
                                <input type="radio" value="Dispatched" name="status">
                                <span class="slider round"></span>
                                </label>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <a >Delivered   :</a>
                                <label class="switch">
                                <input type="radio" value="Delivered" name="status">
                                <span class="slider round"></span>
                                </label><br><br><br><br>






                            <div class="clearfix space20"></div>
                            
                            <label>Message :</label><br>
                
                            <textarea class="form-control" rows="9" name="message" placeholder="Message"></textarea>
                            

                    <input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>"> 
                     
                        <div class="space30"></div>

                        

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="name"  value="<?php echo $user['firstname']; ?>"  placeholder="Full Name">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="phone" placeholder="Phone Number">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="email" value="<?php echo $user['email']; ?>" placeholder="Email Address">
                        </div>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="subject" value="🚚 ORDER UPDATE: your Order is">
                        </div>
    
        <input type="submit"  name="submit" class="btn btn-outline-primary btn-lg btn-block" value="Update Order Status"> <br><br>


            <div class="row-center">

                        <div class="col-sm-16">


                            <?php
                            $csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
                            $cres = mysqli_query($connection, $csql);
                            $cr = mysqli_fetch_assoc($cres);

                            ?>
                            <?php 
                            if(isset($_GET['id']) & !empty($_GET['id'])){
                                $oid = $_GET['id'];
                            }else{
                                header('location: myaccount.php');
                            }
                            $ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
                            $ordres = mysqli_query($connection, $ordsql);
                            $ordr = mysqli_fetch_assoc($ordres);
                            ?>

                            <div class="card invoice status-danger">


                                <div class="card-header " >
                                    <h2  class=" mb-0">Customer Order detils <small class="pull-right">Order #<input class="pull-right " name="id"type="text" id="id" value="<?php echo $ordr['id']; ?>"  readonly></small> </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8"> <a class="" href="#">
                                    
                                        </a> <br>
                                        <address >
                                            <strong>Billed To:</strong><br>
                                            

                                            <input type="text" id="name" value="<?php echo $cr['firstname'] ." ". $cr['lastname'] ;?>"  readonly><br>
                                            <input type="text" name = "address1" id="address1" value="<?php echo $cr['address1'] ; ?>"  readonly><br>
                                            <input type="text"  name = "address2"  id="address2" value="<?php echo $cr['address2'] ; ?>" readonly ><br>
                                            <input type="text"  name = "city" id="city" value="<?php echo $cr['city']  ; ?>"  readonly><br>
                                            <input type="text"  name = "state" id="state" value="<?php echo $cr['state']  ; ?>"  readonly><br>
                                            <input type="text"  name = "zip"  id="zip" value="<?php echo $cr['zip']  ; ?>"  readonly><br>
                                            <input type="text"  name = "mobile" id="mobile" value="<?php echo $cr['mobile']  ; ?>"  readonly><br>
                                            
                                        </address>

                                        <br>
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            <input type="text" name="paymentmode"id="paymentmode" value="<?php echo $ordr['paymentmode']; ?>"  readonly><br>
                                            
                                            <input type="text" id="customer" value="<?php echo $cr['email'];?>"  readonly><br>
                                        </address>
                                    </div>
                                    <br>
                                    <div class="col-sm-11 text-right">
                                        <div class="row">
                                            <div class="col-sm-16">
                                                <h2 class="text-center">Order summary</h2>
                                                <br>
                                            </div>
                                        </div>
                                        <br>
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            
                                            
                                            <p class="text-danger">Order Date:<?php echo $ordr['timestamp']; ?></p>
                                            <br>
                                        </address>
                                    </div>
                                </div>
                                
                                <div class="row-center">
                                    <div class="col-sm-16">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead> 
                                                    <tr>
                                                        <td class="text-center"><strong>Item</strong></td>

                                                        <td class="text-center"><strong></strong></td>
                                                        <td class="text-center"><strong>Quantity</strong></td>

                                                        <td class="text-center"><strong></strong></td>
                                                        <td class="text-center"><strong>Price </strong></td>

                                                        <td class="text-center"><strong></strong></td>
                                                        <td class="text-right"><strong>Totals</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                    <?php

                                                    if(isset($r['id']) & !empty($r['id'])){
                                                        $oid = $r['id'];
                                                    }else{

                                                    }
                                                    $ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
                                                    $ordres = mysqli_query($connection, $ordsql);
                                                    $ordr = mysqli_fetch_assoc($ordres);

                                                    $orditmsql = "SELECT * FROM  orderitems o JOIN products p WHERE o.orderid='$oid' AND o.pid=p.id  ";
                                                    $orditmres = mysqli_query($connection, $orditmsql);
                                                    while($orditmr = mysqli_fetch_assoc($orditmres)){
                                                        ?>
                                                        <tr>

                                                            <td class="text-center">
                                                                <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="iname" name = "item"value="<?php echo substr($orditmr['name'], 0, 25); ?>"  readonly><br>
                                                            
                                                                
                                                            </td>
                                                            
                                                            <td></td>
                                                            <td class="text-center">
                                                                <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="pquantity"  name = "qty" value="<?php echo $orditmr['pquantity']; ?>"  readonly><br>
                                                                
                                                            </td>
                                                            
                                                            <td></td>

                                                            <td class="text-center">
                                                                <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="productprice"  name = "price" value="Rs <?php echo $orditmr['productprice']; ?>/-"  readonly>

                                                            </td>
                                                            
                                                            <td></td>
                                                            <td>
                                                                <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="alltotal"  name = "ptprice" value="Rs <?php echo $orditmr['productprice']*$orditmr['pquantity']; ?>/-"  readonly>
                                                                
                                                            </td>
                                                        </tr>
                                                    <?php } ?>


                                                    <tr>

                                                        

                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>


                                                        <td>
                                                            Order_Total
                                                        </td>

                                                        <td></td>
                                                        <td>
                                                            
                                                            <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="totalprice" name="totle"value="Rs <?php echo $ordr['totalprice']; ?>"  readonly>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        

                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        


                                                        <td>
                                                            Order_Status
                                                        </td>
                                                        <td></td>
                                                        <td >
                                                            <b> <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="orderstatus" value="<?php echo $ordr['orderstatus']; ?>"  readonly>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        

                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        
                                                        
                                                        <td>
                                                            Order_Placed_On
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <b>
                                                                <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="timestamp" value="<?php echo $ordr['timestamp']; ?>"  readonly>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                    

                        
        
                    
                    
                    </div>
                </div>
                
            </div>
        
        </div>
</form>     
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


            
    <?php


    


 use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $status = $_POST['status'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $address1 = $_POST['address1'];
         $address2 = $_POST['address2'];
          $city = $_POST['city'];
           $state = $_POST['state'];
            $zip = $_POST['zip'];

             $id = $_POST['orderid'];
             $uid = $_POST['uid'];

              $paymentmode = $_POST['paymentmode'];



                $item = $_POST['item'];
                $qty = $_POST['qty'];
                $price = $_POST['price'];
                $ptprice = $_POST['ptprice'];
                $thumbneil = $_POST['thumbneil'];

                $totle = $_POST['totle'];


        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "padmalathaathauda@gmail.com";
        $mail->Password = 'p#oTo$#op1997..';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email,'Bimak');
        $mail->addAddress($email);
        $mail->AddReplyTo($email, $name);
        $mail->Subject ='ORDER UPDATE: your Order is '.$status;

        $mail->Body = 

            '<img height="60" width="100" src="https://bimak.lk/wp-content/uploads/2018/08/logo-design-1.png">

        <h1 align=center>' .$subject.''.$status.'</h1><h3 lign=center ><br> Hi ' .$name. ' your order is '.$status.' <br>notice : ' .$message.'</h3><br><br><br>



        🚚 Your order will ship to: <br>'
       . $address1.'<br>'
       . $address2.'<br>'
       . $city.'<br>'
       . $state.'<br>'
       . $zip.'<br><br> Payment Method : '.$paymentmode.'<br><br><br>

     
                       
                    

            
         <br>'.$item.''.$qty.'*'.$price.''.$ptprice.'<br>
           <br>'.$item.''.$qty.'*'.$price.''.$ptprice.'<br>                                         
          <br>'.$item.''.$qty.'*'.$price.''.$ptprice.'<br>                                       
        <br>'.$item.''.$qty.'*'.$price.''.$ptprice.'<br><br> Total Price : '.$totle.'/-
          <br>';
                                             
                                                



        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
            header('location: order_details.php');
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
  
  





?>
</body>

</html>
<?php

$_SESSION['success'] = 0;

?>
<!-- end document-->

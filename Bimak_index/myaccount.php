

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

?>
<?php $sql = "SELECT * FROM users WHERE id=$uid";
$res = mysqli_query($connection, $sql);
$u = mysqli_fetch_assoc($res);
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
  <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.11.1-web/css/all.css">
</head>
<div class="page-wrapper" >
  <!-- MENU SIDEBAR-->
  <aside style=" width: 300px;
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  /* Standard syntax (must be last) */


  height: 100vh;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  transition: all 0.5s ease;
  z-index: 1000;

  ">




  <div>
    <a href="#">
      <h1 style="color:#fff">Bimak</h1>
    </a>
  </div>

  <div class="menu-sidebar2_content "  >

    <div class="account2">
     <h4 class="name"></h4>
     <div class="image img-cir img-120">
      <img src="<?php echo $u['cphoto']?>" alt="John Doe" />
    </div>
    <h4 class="name"><?php echo $u['firstname'] ; ?></h4>
    <a href="logout.php">Sign out</a>
  </div>
  <nav class="navbar-sidebar2">

    <ul class="list-unstyled navbar__list">
      <li class="active has-sub">

        <li>

          <button class="" onclick="openPage('Contact', this, '')" >
            <a><i class="zmdi zmdi-account">Account details</i></a>
          </button>
        </li>

        <li> 
          <button class="" onclick="openPage('Home', this, '')"id="defaultOpen">

            <a ><i class="zmdi zmdi-money-box">Recent Orders</i></a>

          </button>
        </li>
        <li>
          <button  onclick="openPage('News', this, '')" >
            <a>
              <i class="zmdi zmdi-money-box">Billing Address</i></a>


            </li>
            <li>
              <button  onclick="openPage('News', this, '')" >
                <a>
                  <i class="zmdi zmdi-money-box">Notifications</i></a>


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

        <!-- END BREADCRUMB-->
        <section>
          <!-- USER DATA-->
          <div id="Home" class="tabcontent">


            <div class="row">

             <div class="col-md-12">


              <br>
              <div class="container-table-cart pos-relative">
               <div class="wrap-table-shopping-cart bgwhite">
                <h3>Recent Orders</h3><hr><br>

                <table class="table table-borderless table-striped table-earning">
                 <thead>



                  <tr class="table-head">
                    <th class="column-1">id</th>
                    <th class="column-3">Date</th>
                    <th class="column-3">Status</th>
                    <th class="column-2">Payment Mode</th>
                    <th class="column-2 ">Total</th>
                    <th class="column-1 ">Action</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php 


                  $ordsql = "SELECT * FROM orders WHERE  uid='$uid' ORDER BY id DESC";
                  $orders = mysqli_query($connection, $ordsql);
                  while ($ordr= mysqli_fetch_assoc($orders)) {


                   ?>
                   <tr class="table-row">

                    <td class="column">
                     &nbsp&nbsp&nbsp<?php echo $ordr['id']; ?>
                   </td>

                   <td class="column-1">
                     <?php echo $ordr['timestamp']; ?>
                   </td>
                   <td class="column-2" >
                     <?php echo $ordr['orderstatus']; ?>
                   </td>
                   <td class="column-3" >
                     <?php echo $ordr['paymentmode']; ?>
                   </td>
                   <td class="column-4">
                     Rs <?php echo $ordr['totalprice']; ?>.00/-
                   </td>
                   <td class="column-5">

                     <div class='table-data-feature'>
                       
                      <a href="view-order.php?id=<?php echo $ordr['id']; ?>"><b>View</b>  
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Show'>
                          <i class='fas fa-list'></i>
                        </button>
                      </a>




                      <?php if($ordr['orderstatus'] != 'Cancelled'){?>
                       

                        
                        
                        |&#160;&#160;&#160;&#160;&#160;| <a href="invoice.php?id=<?php echo $ordr['id']; ?>"><b>invoice</b> 
                         
                         <button class='item' data-toggle='tooltip' data-placement='top' title='Show'>

                          <i class="fas fa-file-invoice"></i>
                        </button>
                      </a>
                      
                      |&#160;&#160;&#160;&#160;&#160;|<a href="TrakingOrder.php?id=<?php echo $ordr['id']; ?>"><b>Traking</b> 
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Show'>

                          <i class="fas fa-angle-double-right"></i>
                        </button>
                      </a>

                      |&#160;&#160;&#160;&#160;&#160;|<a href="cancel-order.php?id=<?php echo $ordr['id']; ?>"><b>Cancel </b> 
                        
                        <button class='item' data-toggle='tooltip' data-placement='top' title='Show'>
                          <i class="fas fa-trash-alt"></i>
                        </button></a>
                      <?php  } ?>


                    </div>
                  </td>
                </tr>
              <?php  } ?>
            </tbody>
          </table>		
        </div></div>

        <br>
        <br>
        <br>
      </div>
    </div>
  </div>

  <div id="News" class="tabcontent">
   <div class="row">
    <div class="ma-address">
     <h3>My Addresses</h3>
     <p>The following addresses will be used on the checkout page by default.</p>

     <div class="row">
      <div class="col-md-6">
       <h4>Billing Address  <a href="edit-address.php">Edit</a></h4>
       <?php
       $csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
       $cres = mysqli_query($connection, $csql);
       if(mysqli_num_rows($cres) == 1){
        $cr = mysqli_fetch_assoc($cres);
        echo "<p>".$cr['firstname'] ." ". $cr['lastname'] ."</p>";
        echo "<p>".$cr['address1'] ."</p>";
        echo "<p>".$cr['address2'] ."</p>";
        echo "<p>".$cr['city'] ."</p>";
        echo "<p>".$cr['state'] ."</p>";
        echo "<p>".$cr['country'] ."</p>";
        echo "<p>".$cr['company'] ."</p>";
        echo "<p>".$cr['zip'] ."</p>";
        echo "<p>".$cr['mobile'] ."</p>";
        echo "<p>".$cr['email'] ."</p>";
      }
      ?>
    </div>

  </div>



</div></div>
</div>

<div id="Contact" class="tabcontent">


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

                  <input type="hidden" name="cid" value="">

                  <div class='row form-group'>
                    <div class='col col-md-3'>
                      <label for='text-input' class=' form-control-label'>First Name</label>
                    </div>
                    <div class='col-12 col-md-9'>
                      <input type='text' id='text-input' name='firstname'  value="<?php echo $u['firstname'] ; ?>" class='form-control' readonly>
                    </div>
                  </div>

                  <div class='row form-group'>
                    <div class='col col-md-3'>
                      <label for='text-input' class=' form-control-label'>Last Name</label>
                    </div>
                    <div class='col-12 col-md-9'>
                      <input type='text' id='text-input' name='lastname' value="<?php echo $u['lastname'] ; ?>" class='form-control' readonly>
                    </div>
                  </div>

                  <div class='row form-group'>
                    <div class='col col-md-3'>
                      <label for='text-input' class='form-control-label'>Telephone</label>
                    </div>
                    <div class='col-12 col-md-9'>
                      <input type='number' id='text-input' name='telephone' value="<?php echo $u['telephone'] ; ?>" class='form-control' readonly>
                    </div>
                  </div>

                  <div class='row form-group'>
                    <div class='col col-md-3'>
                      <label for='text-input' class='form-control-label'>Email</label>
                    </div>
                    <div class='col-12 col-md-9'>
                      <input type='email' id='text-input' name='email' value="<?php echo $u['email'] ; ?>"  class='form-control' readonly>
                    </div>
                  </div>
                                                  
                  <div class='row form-group'>
                    <div class='col col-md-3'>
                      <label for='text-input' class=' form-control-label'>Profile Photo</label>
                    </div>
                    <img src="<?php echo $u['cphoto']?>" width='100px' height='100px' style='border-radius:50px'><br>
                    <br>
                  </div>                                                                         		    

                </div>
                <div class='card-footer'>
                  <a href="customer_update.php?id=<?php echo  $u['id']; ?>">
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
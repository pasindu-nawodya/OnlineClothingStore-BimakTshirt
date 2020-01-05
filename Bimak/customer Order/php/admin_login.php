<?php
    session_start();
   require_once '../config/connect.php'; 
if(isset($_POST) & !empty($_POST)) {

   $username = mysqli_real_escape_string($connection, $_POST['username']);
   $password = ($_POST['password']);
   $sql = "SELECT * FROM admin WHERE  username='$username'  and password = '$password'";
   $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
   $count = mysqli_num_rows($result);

   if ($count == 1) {
      //echo "User exits, create session";
      $_SESSION['username']= $username;
      header("location: ../order_handling_dashboard.php");
   }else{
      $fmsg = "Invalid Login Credenial";
 
   }
}

?>

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


if(isset($_POST) & !empty($_POST)){
        
        $firstname = ($_POST['firstname']);
        $lastname = ($_POST['lastname']);
        $telephone = ($_POST['telephone']);
 
     
        $email = filter_var($_POST['email'], FILTER_SANITIZE_NUMBER_INT);
        
  

            $usql = "UPDATE users SET  firstname='$firstname', lastname='$lastname', telephone='$telephone', email='$email' WHERE id=$uid";
            $ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
            if($ures){

            }
            header("location: customer_update.php");
}

$sql = "SELECT * FROM users WHERE id=$uid";
                                            $res = mysqli_query($connection, $sql);
                                            $r= mysqli_fetch_assoc($res);
                                    
?>
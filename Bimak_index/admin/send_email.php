<?php
    ob_start();
    session_start();
    require_once '../config/connect.php';
    if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
        header('location: login.php');
    }
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<?php
if(isset($_POST) & !empty($_POST)){
        $status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        $id = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);

            echo $ordprcsql = "INSERT INTO ordertracking (orderid, status, message) VALUES ('$id', '$status', '$message')";
            $ordprcres = mysqli_query($connection, $ordprcsql) or die(mysqli_error($connection));
            if($ordprcres){
                $ordupd = "UPDATE orders SET orderstatus='$status' WHERE id=$id";
                if(mysqli_query($connection, $ordupd)){
                    header('location: orders.php');
                }
            }
}
?>




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

     
                
            

                                                 
                                                  
         <br>'.$item.''.$qty.'*'.$price.''.$ptprice.'<br><br> Total Price : '.$totle.'/-
          <br>';
                                             
           



        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
            header('location: orders.php');
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
  
  





?>

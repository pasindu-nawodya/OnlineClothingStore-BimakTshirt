<?php


    


 use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
       
        $subject = $_POST['subject'];
        $message = $_POST['message'];

       
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
        $mail->setFrom($email, "Bimak");
        $mail->addAddress($email);
        $mail->AddReplyTo($email, $name);
        $mail->Subject =$subject;

        $mail->Body = '<img height="60" width="100" src="https://bimak.lk/wp-content/uploads/2018/08/logo-design-1.png"> <h1 align=center>' .$subject .'</h1><br> Email : .' .$email. '<br> name : ' .$name.'<br> phone : <br><br><br>'.$message;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
            header('location: contact.php');
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
  
  





?>



<?php 
session_start();
require_once 'config/connect.php'; 
 	use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST) & !empty($_POST)) {

	$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_EMAIL);
	$lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_EMAIL);
	$telephone = filter_var($_POST['telephone'],FILTER_SANITIZE_EMAIL);
	$password =password_hash($_POST['password'], PASSWORD_DEFAULT);
	$sqla = "SELECT * FROM users WHERE email='$email'";
    $resulte = mysqli_query($connection, $sqla);

    if ($resulte) {
            header("location: register.php?message=5");
        }
	echo $sql ="INSERT INTO users (email,password,firstname,lastname,telephone) VALUES ('$email','$password','$firstname','$lastname','$telephone')";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	

	if ($result) {
		//echo "User exits, create session";
		
		header("location: login.php?massage=3");
			


	




    if (isset($_POST['email'])) {
        $firstname = $_POST['firstname'];
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
        $mail->setFrom($email, 'Bimak');
        $mail->addAddress($email);
        $mail->AddReplyTo($email, $firstname);
        $mail->Subject =$subject;

       
        	
        
        $mail->Body = '<h1 align=center>' .$subject .'</h1><br> Email : .' .$email. '<br> name : ' .$name.'<br> phone : <br><br><br>'.$message;


 

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
            header("location: myaccount.php");
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
  
  








	}else{
		header("location: register.php?massage=2");

	}

}

?>
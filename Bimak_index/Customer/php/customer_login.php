<?php
    
    session_start();

    $con = mysqli_connect('localhost','root','1234');
    mysqli_select_db($con,'bimak');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customer_account 
            WHERE email = '$email' && password = '$password'";

    $result = mysqli_query($con,$sql);

    $num = mysqli_num_rows($result);

    $row_customer = mysqli_fetch_array($result);

    $cid = $row_customer['cid'];
    $firstname = $row_customer['firstname'];
    $lastname = $row_customer['lastname'];
    $address = $row_customer['address'];
    $telephone = $row_customer['telephone'];
    $email = $row_customer['email'];
    $password = $row_customer['password'];
    $cphoto = $row_customer['cphoto'];

    if($num == 1){

        $_SESSION['cid'] = $cid;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['address'] = $address;
        $_SESSION['telephone'] = $telephone;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['cphoto'] = $cphoto;

        header('location:../../index.php');

    }else{
        
        header('location:../customer_login.php');
    }

?>
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

 if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ){
 	$cart = $_SESSION['cart'];


 }else{
 	header('location: myaccount.php');

	}//echo$_SESSION['customerid'];





	if(isset($_POST) & !empty($_POST)){
		if($_POST['agree'] == true){
			$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
			$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
			$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
			$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
			$address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
			$address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
			$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
			$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
			$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
			$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
			$zip = filter_var($_POST['zipcode'], FILTER_SANITIZE_NUMBER_INT);


			$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
			$res = mysqli_query($connection, $sql);
			$r = mysqli_fetch_assoc($res);
			$count = mysqli_num_rows($res);
			if($count == 1){
			//update data in usersmeta table
				$usql = "UPDATE usersmeta SET country='$country', firstname='$fname', lastname='$lname', address1='$address1', address2='$address2', city='$city', state='$state',  zip='$zip', company='$company', mobile='$phone' WHERE uid=$uid";
				$ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
				if($ures){

					$total = 0;
					$utotal = 0;
					$qty = 0;
					$sellqty=0;
					foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$total = $total + ($ordr['price']*$value['quantity']);



						$sqla = "SELECT * FROM usersmeta WHERE uid=$uid";

										$resa = mysqli_query($connection, $sqla);
										$ra = mysqli_fetch_assoc($resa);
											$utotal = $ra['usertotal'];
    									 $utotal =$ra['usertotal'] + $total;



						$cqty = $cqty + ($ordr['qty']-$value['quantity']);
						$sellqty = ($ordr['sellqty']) + ($value['quantity']);


						$utot = "UPDATE usersmeta SET usertotal='$utotal' WHERE uid=$uid";
						$utott = mysqli_query($connection, $utot);

						$qtysql = "UPDATE products SET qty='$cqty',sellqty='$sellqty' WHERE id=$key";
						$qtyres = mysqli_query($connection, $qtysql);

					}

					echo $iosql = "INSERT INTO orders (uid, totalprice, orderstatus, paymentmode) VALUES ('$uid', '$total', 'Order Placed', '$payment')";
					$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
					if($iores){
					//echo "Order inserted, insert order items <br>";
						$orderid = mysqli_insert_id($connection);
						foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
							$ordsql = "SELECT * FROM products WHERE id=$key";
							$ordres = mysqli_query($connection, $ordsql);
							$ordr = mysqli_fetch_assoc($ordres);

							$pid = $ordr['id'];
							$productprice = $ordr['price'];
							$quantity = $value['quantity'];


							$orditmsql = "INSERT INTO orderitems (pid, orderid, productprice, pquantity) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
							$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
						}
					}
					unset($_SESSION['cart']);
					header("location: myaccount.php");
				}
			}else{
			//insert data in usersmeta table
				$isql = "INSERT INTO usersmeta (country, firstname, lastname, address1, address2, city, state, zip, company, mobile, uid) VALUES ('$country', '$fname', '$lname', '$address1', '$address2', '$city', '$state', '$zip', '$company', '$phone', '$uid')";
				$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
				if($ires){

					$total = 0;
					foreach ($cart as $key => $value) {
					//echo $key . " : " . $value['quantity'] ."<br>";
						$ordsql = "SELECT * FROM products WHERE id=$key";
						$ordres = mysqli_query($connection, $ordsql);
						$ordr = mysqli_fetch_assoc($ordres);

						$total = $total + ($ordr['price']*$value['quantity']);
					}

					echo $iosql = "INSERT INTO orders (uid, totalprice, orderstatus, paymentmode) VALUES ('$uid', '$total', 'Order Placed', '$payment')";
					$iores = mysqli_query($connection, $iosql) or die(mysqli_error($connection));
					if($iores){
					//echo "Order inserted, insert order items <br>";
						$orderid = mysqli_insert_id($connection);
						foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
							$ordsql = "SELECT * FROM products WHERE id=$key";
							$ordres = mysqli_query($connection, $ordsql);
							$ordr = mysqli_fetch_assoc($ordres);

							$pid = $ordr['id'];
							$productprice = $ordr['price'];
							$quantity = $value['quantity'];


							$orditmsql = "INSERT INTO orderitems (pid, orderid, productprice, pquantity) VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
							$orditmres = mysqli_query($connection, $orditmsql) or die(mysqli_error($connection));
						//if($orditmres){
							//echo "Order Item inserted redirect to my account page <br>";
						//}
						}
					}
					unset($_SESSION['cart']);
					header("location: myaccount.php");
				}

			}
		}

	}

	$sql = "SELECT * FROM usersmeta WHERE uid= $uid";
	$res =mysqli_query($connection, $sql);
	$r = mysqli_fetch_assoc($res);


	?>

	<!------------------------------------email-------------------------------------->


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

        $mail->Body = '<h1 align=center>' .$subject .'</h1><br> Email : .' .$email. '<br> name : ' .$name.'<br> : <br><br><br>'.$message;

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







    ?>



    <!-------------------------------------------------------------------------->

    <!-- SHOP CONTENT -->
    <section id="content">
    	<div class="content-blog"><br><br><br>
    		<div class="page_header text-center">
    			<h2>Shop - Checkout</h2>
    			<p>Get the best kit for smooth shave</p>
    		</div><br><br><br>
    		<?php 
//echo $_SESSION['customer'];
	//echo$_SESSION['customerid'];

    		?>
    		<div class="container">
    			<div class="row d-flex justify-content-center">
    				<form  method="post">
    					<div class="col-md-9 col-md-offset-3">
    						<div class="billing-details">
    							<h3 class="uppercase">Billing Details</h3><br><br>



    							<?php
    							$ordsql = "SELECT * FROM users WHERE id='$uid'";
    							$ordres = mysqli_query($connection, $ordsql);
    							$user = mysqli_fetch_assoc($ordres) 


    							?>
    							<?php  $user['email']; ?>
    							<?php  $user['firstname']; ?>
    							<?php  $user['firstname']; ?>



    							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="name"  value="<?php echo $user['firstname']; ?>"  placeholder="Full Name">
    							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="email" value="<?php echo $user['email']; ?>" placeholder="Email Address">
    							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="subject" value="✅ ORDER CONFIRMED:">

    							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="message" value="Thank for your order">

    							<div class="space30"></div>


    							<div class="row">
    								<div class="col-md-6">
    									<div class="form-group">
    										<div class="effect1 w-size9">
    											<label>First Name </label>
    											<input name="fname" class="form-control" placeholder="" value="<?php if(!empty($r['firstname'])){ echo $r['firstname']; } elseif(isset($fname)){ echo $fname; } ?>" type="text">
    											<span class="effect1-line"></span>
    										</div>
    									</div>
    								</div>

    								<div class="col-md-6">
    									<div class="form-group">
    										<div class="effect1 w-size9">
    											<label>Last Name </label>
    											<input name="lname" class="form-control" placeholder="" value="<?php if(!empty($r['lastname'])){ echo $r['lastname']; }elseif(isset($lname)){ echo $lname; } ?>" type="text">
    											<span class="effect1-line"></span>
    										</div>
    									</div>
    								</div>
    							</div>



    							<div class="clearfix space20"></div>
    							<div class="form-group">
    								<div class="effect1 w-size9">
    									<label>Company Name</label>
    									<input name="company" class="form-control" placeholder="" value="<?php if(!empty($r['company'])){ echo $r['company']; }elseif(isset($company)){ echo $company; } ?>" type="text">
    									<span class="effect1-line"></span>
    								</div>
    							</div>


    							<div class="clearfix space20"></div>

    							<div class="form-group">
    								<div class="effect1 w-size9">
    									<label>Address </label>
    									<input name="address1" class="form-control" placeholder="Street address" value="<?php if(!empty($r['address1'])){ echo $r['address1']; } elseif(isset($address1)){ echo $address1; } ?>" type="text">
    									<span class="effect1-line"></span>
    								</div>
    							</div>

    							<div class="clearfix space20"></div>

    							<div class="form-group">
    								<div class="effect1 w-size9">
    									<input name="address2" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="<?php if(!empty($r['address2'])){ echo $r['address2']; }elseif(isset($address2)){ echo $address2; } ?>" type="text">
    									<span class="effect1-line"></span>
    								</div>
    							</div>

    							<div class="clearfix space20"></div>

    							<div class="row">
    								<div class="col-md-4">
    									<div class="form-group">
    										<div class="effect1 w-size9">
    											<label>City </label>
    											<input name="city" class="form-control" placeholder="City" value="<?php if(!empty($r['city'])){ echo $r['city']; }elseif(isset($city)){ echo $city; } ?>" type="text">
    											<span class="effect1-line"></span>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-4">
    									<div class="form-group">
    										<div class="effect1 w-size9">
    											<label>State</label>
    											<input name="state" class="form-control" value="<?php if(!empty($r['state'])){ echo $r['state']; }elseif(isset($state)){ echo $state; } ?>" placeholder="State" type="text">
    											<span class="effect1-line"></span>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-4">
    									<div class="form-group">
    										<div class="effect1 w-size9">
    											<label>Postcode </label>
    											<input name="zipcode" class="form-control" placeholder="Postcode / Zip" value="<?php if(!empty($r['zip'])){ echo $r['zip']; }elseif(isset($zip)){ echo $zip; } ?>" type="text">

    											<span class="effect1-line"></span>
    										</div>
    									</div>
    								</div>
    							</div>

    							<div class="clearfix space20"></div>
    							<div class="form-group">
    								<div class="effect1 w-size9">
    									<label>Phone </label>
    									<input name="phone" class="form-control" id="billing_phone" placeholder="" value="<?php if(!empty($r['mobile'])){ echo $r['mobile']; }elseif(isset($phone)){ echo $phone; } ?>" type="text">
    								</div>
    							</div>	
    						</div>
    					</div>

    				</div>
    				<br>
    				<br>
    				<br>
    				<div class="space100"></div>
    				<h4 class="heading">Your order</h4><br>

    				<table class="table table-bordered extra-padding">
    					<tbody>
    						<tr>
    							<th>Cart Subtotal</th>
    							<td><span class="amount"> 
    								RS 


    								<?php 
    							
    								if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ){


    									echo $total; 
    									
    								}




    								?>.00/-</span></td>
    							</tr>
    							<tr>
    								<th>Shipping and Handling</th>
    								<td>
    									Free Shipping				
    								</td>
    							</tr>
    							<tr>
    								<th>Order Total</th>
    								<td><strong><span class="amount">




    									RS <?php 



    									if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ){


    										echo $total; 
    									}





    									?>.00/-


    								</span></strong> </td>
    							</tr>
    						</tbody>
    					</table>
    					<br>
    					<div class="clearfix space30"></div>
    					<h4 class="heading">Payment Method</h4><br>
    					<div class="clearfix space20"></div>

    					<div class="payment-method">
    						<div class="row">

    							<div class="col-md-4">
    								<input name="payment" id="radio1" class="css-checkbox" type="radio" value="Cash on dilvery"><span>Cash on dilvery</span><br><br>
    								<div class="clearfix space100"></div>
    								<p class="s-text7 w-size27" >Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
    							</div>
    							<div class="col-md-4">
    								<input name="payment" id="radio2" class="css-checkbox" type="radio" value="Cheque Payment"><span>Cheque Payment</span><br><br>
    								<div class="space20"></div>
    								<p class="s-text7 w-size27" >Please send your cheque to BLVCK Fashion House, Oatland Rood, UK, LS71JR</p>
    							</div>
    							<div class="col-md-4">
    								<input name="payment" id="radio3" class="css-checkbox" type="radio"><span>Paypal</span><br><br>
    								<div class="space20"></div>
    								<p class="s-text7 w-size27" >Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
    							</div>

    						</div>
    						<div class="space30"></div>
    						<br><br>
    						<input name="agree" id="checkboxG2" class="css-checkbox" value="true" type="checkbox"><span>I've read and accept the <a href="#">terms &amp; conditions</a></span>
    						<!------------------------------------------------------------------------------------------------------->

    						<!------------------------------------------------------------------------------------------------------->

    						<div class="col-md-5">
    							<div class="space30"></div><br><br>

    							<input type="submit"  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 " value=" Pay Now"><br><br>
    						</div>
    					</div>
    				</div>		
    			</form>
    		</div>
    	</section>

    	<div class="clearfix space70"></div>
    	<?php include'inc/footer.php';?>
<?php
	ob_start();
	session_start();
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}
include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid = $_SESSION['customerid'];


if(isset($_POST) & !empty($_POST)){
		
		$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
		$company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
		$address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
		$address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
		$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
		$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		
		$zip = filter_var($_POST['zipcode'], FILTER_SANITIZE_NUMBER_INT);

			$usql = "UPDATE usersmeta SET  firstname='$fname', lastname='$lname', address1='$address1', address2='$address2', city='$city', state='$state',  zip='$zip', company='$company', mobile='$phone' WHERE uid=$uid";
			$ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
			if($ures){

			}
			header("location: myaccount.php");
}

$sql = "SELECT * FROM usersmeta WHERE uid=$uid";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
?>

	
	<!-- SHOP CONTENT -->
	<section id="content">
				<div class="row d-flex justify-content-center">
				<form method="post">
				<div class="col-md-6 col-md-offset-3">
					<div class="billing-details">
						<h3 class="uppercase">Billing Details</h3><br><br>
						
						
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
								<div class="space30"></div>
					<input type="submit"  class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" value=" Update Address"><br><br>
					</div>
					</div>	
					</div>
				</div>
				
				</div>
	</section>
	
<?php include 'inc/footer.php' ?>

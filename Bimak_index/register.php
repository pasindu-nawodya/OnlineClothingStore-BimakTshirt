c
<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; ?>
<?php include 'inc/nav.php';?>
			
	<!-- SHOP CONTENT -->
	<!-- SHOP CONTENT -->
	<section id="content" class="bg-title-page p-t-40 p-b580 flex-col-c-m" style="background-image: url(images/log04.jpg);" >
		<div class="col-sm-9 col-md-3 col-lg-10 p-b-50 " style="background-color: rgba(255, 255, 255, 0.9);" >
			<div class="container">
				<div class="m-text5 t-center">
							<h1 class="m-text5 t-center">
								Shop - Account</h1>
								<p>Start to better experiense </p><br>
								<hr>
							</div>
					

				<div class="row">
						



			

				<div class="col-md-12">
					<div class="box-content">
						<h3 class="heading "></h3><br>
						
						<h3 class="heading">Register An Account</h3><br>
						
						<div class="clearfix space40"></div>
								<?php if(isset($_GET['message'])){
								if($_GET['message'] == 5){
						 ?><div class="alert alert-danger" role="alert"> <?php echo "Alrady registered"; ?> </div>

						 <?php } }?>

						<form class="logregform" method="post" action="registerprocess.php">
							<div class="row">
								<div class="col-md-4">
								<div class="form-group">
								<div class="effect1 w-size9">
									<label>First Name </label>
									<input type="text" name="firstname"  class="form-control" placeholder="First Name" required>
									<span class="effect1-line"></span>
								</div>
								</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
								<div class="effect1 w-size9">
									<label>Last Name </label>
									<input type="text" name="lastname"  class="form-control" placeholder="First Name" required>
									<span class="effect1-line"></span>
								</div>
								</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-8">
								<div class="form-group">
								<div class="effect1 w-size9">
									<label>E-mail Address</label>
										<input type="email" name="email" class="form-control" placeholder="email@example.com" required="email">
									<span class="effect1-line"></span>
								</div>
								</div>
								</div>
								
								
							</div>
							<br>
							<div class="row">
								<div class="col-md-8">
								<div class="form-group">
								<div class="effect1 w-size9">
									<label>Mobile number</label>
										<input type="tel" name="telephone"  class="form-control" placeholder="tel-no" pattern="[0-9]{10}" required>
									<span class="effect1-line"></span>
								</div>
								</div>
								</div>
								
								
							</div>
							
								<br>
						

							<div class="clearfix space20"></div>
							<div class="row">
								<div class="col-md-4">
								<div class="form-group">
								<div class="effect1 w-size9">
									<label>Password</label>
										<input type="password" id="txtPassword" name="password" value="" class="form-control" placeholder="password" required>
								</div>
								</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
								<div class="effect1 w-size9">
									<label>Re-enter Password</label>
										<input type="password" id="txtConfirmPassword" name="repassword" value="" class="form-control" placeholder="Re-password" required>
									<span class="effect1-line"></span>
								</div>
								</div>
								</div>
								
							</div>
<br>						<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="subject" value="Congratulation, You have Successfuly Registered :">

<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="message" value="Thank You For Joining With Us.! ">
							<div class="row">
								<div class="col-md-8">
									<div class="space20"></div>
									<button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" onclick="return Validate()">Register</button><br>
								</div>
							</div>
						</form>
						<script type="text/javascript">
        						function Validate() {
            						var password = document.getElementById("txtPassword").value;
            						var confirmPassword = document.getElementById("txtConfirmPassword").value;
            						if (password != confirmPassword) {
               							 alert("Passwords do not match.");
               							 return false;
            						}
            						return true;
       			 					}
    							</script>
					</div>
					

				</div>


			</div>


							
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>
		<?php include'inc/footer.php';?>

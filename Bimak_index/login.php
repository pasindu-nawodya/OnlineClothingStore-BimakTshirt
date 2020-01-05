c
<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; ?>
<?php include 'inc/nav.php';?>
			
	<!-- SHOP CONTENT -->
	<section id="content" class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/log04.jpg);" >
		<div class="col-sm-9 col-md-3 col-lg-3 p-b-50 " style="background-color: rgba(255, 255, 255, 0.7);" >
			<div class="container">
				<div class="m-text5 t-center">
					
							<h1 class="m-text5 t-center">
								Bimak- Login</h1>
								<p>Start to better experiense </p><br>

								<hr>

							</div>
					

				<div class="center" >
					
				
					
						<h3 class="heading "></h3><br>
						
					
						<div class="clearfix space40"></div>
							<?php if(isset($_GET['message'])){
							if($_GET['message'] == 1){
						 ?><div class="alert alert-danger" role="alert"> <?php echo "Invalid Login Credentials"; ?> </div>

						 <?php } }?>
						 <?php if(isset($_GET['massage'])){
							if($_GET['massage'] == 3){
						 ?><div class="alert alert-info" role="alert"> <?php echo "Successfuly Registerd"; ?> </div>

						 <?php } }?>
						<form class="t-center" method="post" action="loginprocess.php">
							<div class="row-center ">
								<div class="form-group">
									<div class="effect1 w-size9">
										<label> E-mail Address</label>
										<input type="email" name="email" value="" placeholder="email@example.com"class="form-control">
										<span class="effect1-line"></span>
									</div>
								</div>
							</div>
							<br>
							<div class="clearfix space20"></div>
							<div class="row-center">
								<div class="form-group">
									<div class="effect1 w-size9">
									
										<label>Password</label>
										<input type="password" name="password"value="" class="form-control" placeholder="password">
										<span class="effect1-line"></span>


									</div>
								</div>
							</div>
							<div class="clearfix space20"></div>

							<div class="row-center">
							
								<div class="col-md-8-center">
										
									<button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Login</button>
									<br><a class="pull-right" href="register.php">(Dont have an account? Sign Up)</a>
								</div>
							</div>
						</form>
					
				


							
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>
		<?php include'inc/footer.php';?>
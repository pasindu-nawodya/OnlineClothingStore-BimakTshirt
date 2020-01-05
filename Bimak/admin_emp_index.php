


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form style="width: 20%;position:absolute;top: 20%;left: 10%;" class="login100-form validate-form" action="admin_login.php" method="post">
					<div class="login100-form-avatar">

					<img src="images/employee/admin.png">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Administrator Login
					</span>

					
					<div class="container-login100-form-btn p-t-10">

						<button class="login100-form-btn" name="submit" type="submit">
							Login
						</button>
					</div>
				</form>

				<form style="width: 20%;position:absolute;top: 20%;right: 40%;" class="login100-form validate-form" action="Employee/Emp/emp_login.php" method="post">
					<div class="login100-form-avatar">

					<img src="images/employee/emp.jpg">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Employee Login
					</span>

					
					<div class="container-login100-form-btn p-t-10">

						<button class="login100-form-btn" name="submit" type="submit">
							Login
						</button>
					</div>
				</form>

				<form style="width: 20%;position:absolute;top: 20%;right: 10%;" class="login100-form validate-form" action="OrderHandler/oh_login.php" method="post">
					<div class="login100-form-avatar">

					<img src="images/employee/oh.png">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Delivery Handler
					</span>

					
					<div class="container-login100-form-btn p-t-10">

						<button class="login100-form-btn" name="submit" type="submit">
							Login
						</button>
					</div>
				</form>


				<form style="width: 20%;position:absolute;top: 60%;right: 40%;" class="login100-form validate-form" action="customer Order/co_login.php" method="post">
					<div class="login100-form-avatar">

					<img src="images/employee/progres.png">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Order Handler
					</span>

					
					<div class="container-login100-form-btn p-t-10">

						<button class="login100-form-btn" name="submit" type="submit">
							Login
						</button>
					</div>
				</form>


			</div>
		</div>

	</div>	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
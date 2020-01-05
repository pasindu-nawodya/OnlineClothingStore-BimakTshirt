
<?php 
	session_start();
	require_once '../config/connect.php'; 
	if (!isset($_SESSION['email'])& empty($_SESSION['email'])) {
		header('location: login.php');
	}
?>
<?php include 'inc/header.php';?>
<?php include 'inc/nav.php';?>


			
	
	<div class="close-btn fa fa-times"></div>

	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Bimak Admin</h2>
						<p>Admin Panele</p>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<div class="clearfix space70"></div>
	
<?php include'inc/footer.php';?>
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

?>
<style>
	.img1 {
		width: 1000px;
		height: auto;
	}
	.img2 {
		width: 100px;
		height: 200px;
	}

	.progress-bar {
		width: 0;
		animation: progress 1.5s ease-in-out forwards;

		.title {
			opacity: 0;
			animation: show 0.35s forwards ease-in-out 0.5s;
		}
	} 

	@keyframes progress {
		from {
			width: 0;
		}
		to {
			width: 100%;
		}
	} 
	@keyframes show  {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
	}
</style>

<!-- SHOP CONTENT -->
<section id="content"  class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/track01.jpg);>
	<div class="content-blog content-account">
		<div class="container">
			<div class="row">
				<div class="page_header text-center">
					
				</div>
				<div class="col-md-12">

					




					<?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: myaccount.php');
					}
					$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
					$ordres = mysqli_query($connection, $ordsql);

					$Order_Placed ="Order Placed";
					$Delivered = "Delivered";
					$Progress = "In Progress";
					$Dispatched = "Dispatched";

					$ordr = mysqli_fetch_assoc($ordres);
					?>

					<?php  $ordr['orderstatus'];



					?>


					<br>
					<br>
					<br>
					<div>







						<?php if($ordr['orderstatus'] == $Order_Placed){?>
							<div style="width: 800px; margin: 50px auto">
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 25%">
										<span class="title">25%</span>
									</div>
								</div>

							<img class="img1" src="images/icons/order placed01.png" >	
							</div>
							






						<?php }else{ ?>



						<?php } ?>

						<?php if($ordr['orderstatus'] == $Progress){?>


					<div style="width: 800px; margin: 10px auto">
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 50%">
										<span class="title">50%</span>
									</div>
								</div>
								<img class="img1" src="images/icons/progres92.png" >	
								

						
							</div>
							


							

						<?php }else{ 


						}
						?>



						<?php if($ordr['orderstatus'] == $Dispatched){?>
						

						<div style="width: 900px; margin: 10px auto">
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 75%">
										<span class="title">75%</span>
									</div>
								</div>
		
							<img class="img1" src="images/icons/delivey01.png" >

				

							</div>

						<?php }else{ 


						}
						?>




						<?php if($ordr['orderstatus'] == $Delivered){?>
							<div style="width: 900px; margin: 10px auto">
							
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 100%">
										<span class="title">100%</span>
									</div>
								</div>
							<img class="img1" src="images/icons/Delivered01.png" >



							</div>
								

							


						<?php }else{ 


						}
						?>






					</div>

				</div>
			</div>
		</div>
	</div>
</section>
</div>

<?php include 'inc/footer.php' ?>

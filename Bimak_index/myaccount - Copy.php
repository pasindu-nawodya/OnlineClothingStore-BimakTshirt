

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

?>

<!-- SHOP CONTENT -->
<section id="cart bgwhite p-t-70 p-b-100">
	<div class="content-blog content-account">
		<div class="container">
			<div class="page_header text-center">
				<div class="m-text5 t-center">
					<br><h1 class="m-text5 t-center">
					My Account</h1>
					
				</div>
				
			</div>

			<!-- ---------------------------------------------------------------------------------------------------  -->

			<button class="tablink" onclick="openPage('Home', this, 'white')" id="defaultOpen">Recent Orders</button>
			<button class="tablink" onclick="openPage('News', this, 'white')" >Billing Address</button>
			<button class="tablink" onclick="openPage('Contact', this, 'white')">Account details</button>


			<div id="Home" class="tabcontent">


				<div class="row">
					
					<div class="col-md-12">

						
						<br>
						<div class="container-table-cart pos-relative">
							<div class="wrap-table-shopping-cart bgwhite">
								<h3>Recent Orders</h3><hr><br>

								<table class="table-shopping-cart">
									<thead>

										

										<th class="table-head">
											
											<th class="column-1">Date</th>
											<th class="column-3">Status/trakin</th>
											<th class="column-2">Payment Mode</th>
											<th class="column-3 ">Total</th>
											<th class="column-2 "></th>

										</th>
									</thead>
									<tbody>
										<?php 


										$ordsql = "SELECT * FROM orders WHERE  uid='$uid'";
										$orders = mysqli_query($connection, $ordsql);
										while ($ordr= mysqli_fetch_assoc($orders)) {
											
											
											?>
											<tr class="table-row">

												<td class="column">
													&nbsp&nbsp&nbsp<?php echo $ordr['id']; ?>
												</td>
												
												<td class="column-1">
													<?php echo $ordr['timestamp']; ?>
												</td>
												<td class="column-2" >
													<?php echo $ordr['orderstatus']; ?>
												</td>
												<td class="column-3" >
													<?php echo $ordr['paymentmode']; ?>
												</td>
												<td class="column-4">
													Rs <?php echo $ordr['totalprice']; ?>.00/-
												</td>
												<td class="column-5">
													<a href="view-order.php?id=<?php echo $ordr['id']; ?>">View</a>
													<?php if($ordr['orderstatus'] != 'Cancelled'){?>
														| <a href="cancel-order.php?id=<?php echo $ordr['id']; ?>">Cancel</a>
														| <a href="invoice.php?id=<?php echo $ordr['id']; ?>">invoice</a>
														| <a href="TrakingOrder.php?id=<?php echo $ordr['id']; ?>">Traking Order</a>
													<?php  } ?>


													
												</td>
											</tr>
										<?php  } ?>
									</tbody>
								</table>		
							</div></div>

							<br>
							<br>
							<br>
						</div>
					</div>
				</div>

				<div id="News" class="tabcontent">
					<div class="row">
						<div class="ma-address">
							<h3>My Addresses</h3>
							<p>The following addresses will be used on the checkout page by default.</p>

							<div class="row">
								<div class="col-md-6">
									<h4>Billing Address  <a href="edit-address.php">Edit</a></h4>
									<?php
									$csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
									$cres = mysqli_query($connection, $csql);
									if(mysqli_num_rows($cres) == 1){
										$cr = mysqli_fetch_assoc($cres);
										echo "<p>".$cr['firstname'] ." ". $cr['lastname'] ."</p>";
										echo "<p>".$cr['address1'] ."</p>";
										echo "<p>".$cr['address2'] ."</p>";
										echo "<p>".$cr['city'] ."</p>";
										echo "<p>".$cr['state'] ."</p>";
										echo "<p>".$cr['country'] ."</p>";
										echo "<p>".$cr['company'] ."</p>";
										echo "<p>".$cr['zip'] ."</p>";
										echo "<p>".$cr['mobile'] ."</p>";
										echo "<p>".$cr['email'] ."</p>";
									}
									?>
								</div>

							</div>



						</div></div>
					</div>

					<div id="Contact" class="tabcontent">
						<h3>Contact</h3>
						<p>Get in touch, or swing by for a cup of coffee.</p>
					</div>



					<!-- ---------------------------------------------------------------------------------------------------  -->





















					




					
				</div>
			</div>
		</section>













		<script>
			function openPage(pageName,elmnt,color) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablink");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].style.backgroundColor = "";
				}
				document.getElementById(pageName).style.display = "block";
				elmnt.style.backgroundColor = color;
			}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<div class="clearfix space70"></div>
<?php include'inc/footer.php';?>
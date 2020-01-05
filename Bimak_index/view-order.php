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
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>My Account</h2>
					</div>
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered">
				<thead>
					<tr><th>Product</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th></th>
						<th>Total Price</th>
					</tr>
				</thead>
				<tbody>

				<?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: myaccount.php');
					}
					$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$orditmsql = "SELECT * FROM  orderitems o JOIN products p WHERE o.orderid='$oid' AND o.pid=p.id  ";
					$orditmres = mysqli_query($connection, $orditmsql);
					while($orditmr = mysqli_fetch_assoc($orditmres)){
				?>
					<tr>
						<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<a href="#"><img src="admin/<?php echo $orditmr['thumbneil']; ?>" alt="IMG-PRODUCT" height="100" width="10"></a>
								
								</div>
							</td>
						
						<td>
							<a href="single.php?id=<?php echo $orditmr['pid']; ?>"><?php echo substr($orditmr['name'], 0, 25); ?></a>


							
						</td>
						<td>
							<?php echo $orditmr['pquantity']; ?>
						</td>
						<td>
							Rs <?php echo $orditmr['productprice']; ?>/-
						</td>
						<td>
							
						</td>
						<td>
							Rs <?php echo $orditmr['productprice']*$orditmr['pquantity']; ?>/-
						</td>
					</tr>
				<?php } ?>

					<tr>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Total
						</td>
						<td>
							Rs <?php echo $ordr['totalprice']; ?>
						</td>
					</tr>
					<tr>

						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Status
						</td>
						<td>
							<?php echo $ordr['orderstatus']; ?>
						</td>
					</tr>
					<tr>

						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Placed On
						</td>
						<td>
							<?php echo $ordr['timestamp']; ?>
						</td>
					</tr>
					
				</tbody>
			</table>		

			<br>
			<br>
			<br>


					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include 'inc/footer.php' ?>

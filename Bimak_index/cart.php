<?php 

session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 

if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ){
$cart = $_SESSION['cart'];
	

	}

 ?>



	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-02.png);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<thead>
						<th class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</th>
					</thead>
					<TBODY>
						<?php
						if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ){

	

	
					//print_r($cart);
				$total = 0;
				$cqty = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
						<tr class="table-row">
							<td class="column">
								&nbsp&nbsp&nbsp<a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="fa fa-times"></i></a>
							</td>
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<a href="#"><img src="admin/<?php echo $cartr['thumbneil']; ?>" alt="IMG-PRODUCT" height="120" width="90"></a>
								
								</div>
							</td>
							<td class="column-2"><a href="single.php?id=<?php echo $cartr['id']; ?>"><?php echo substr($cartr['name'], 0 , 30); ?></a></td>
							
							<td class="column-3">RS<?php echo $cartr['price']; ?>.00/-</td>
							
							<td class="column-4 t-center">

							
								

								<?php echo $value['quantity']; 

								
								?>
									<?php 
								$cqty = $cqty + ($cartr['qty']-$value['quantity']);
								?>



						
							</td>
							<td class="column-5">RS<?php echo ($cartr['price']*$value['quantity']); ?>.00/-</td>
						</tr>

						
						<?php 
					$total = $total + ($cartr['price']*$value['quantity']);


					} ?>
						</TBODY>
					</table>
				</div>
			</div>

			

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						RS <?php echo $total; ?>.00/-
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						
						
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						RS <?php echo $total; ?>.00/-
					</span>
				</div>
<?php } ?>
				<div class="size15 trans-0-4">
					<!-- Button -->
					<a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
				</div>
			</div>
		</div>
	</section>



		<?php include'inc/footer.php';
		?>
		
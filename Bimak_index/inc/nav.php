
			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								
							</li>

							<li>
								<a href="product.php">Shop</a>
								<ul class="sub_menu">
									<?php

							$catsql = "SELECT * FROM category";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres))
							{ ?>
							
							<li><a href="product.php?id=<?php echo $catr['id']; ?>"><?php echo $catr['categoryname']; ?></a></li>

						<?php } ?>

								</ul>
							</li>

							<li class="sale-noti">
								<a href="product.php">Sale</a>
							</li>

							<li>
								<a href="cart.php">Features</a>
							</li>

							

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>

							<li>

							</li>
						</ul>
					</nav>
				</div>
			
				<!-- Header Icon -->

				<div class="header-icons">
					
					<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">



	<a href="myaccount.php">
		<?php 
if( isset($_SESSION['customer']) && !empty($_SESSION['customer']) ){
echo $_SESSION['customer'];
$uid = $_SESSION['customerid'];
	//echo$_SESSION['customerid'];
$usersql = "SELECT cphoto FROM users  WHERE id=$uid";
										$userres = mysqli_query($connection, $usersql);
										$userr = mysqli_fetch_assoc($userres);
										
									
 ?>
 	
 </a>
										
										
											<a  class="pull-left" href="myaccount.php"><img style="border-radius: 50%;" class="comment-avatar" src="<?php echo $userr['cphoto']?>" alt="" height="40" width="40" ></a>

										<?php } ?>
 								
						<li>
								<a class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">

					</a>
								<ul class="sub_menu">

									<?php if( isset($_SESSION['customer']) && !empty($_SESSION['customer']) ){?>
     						 			 <li><a  href="myaccount.php">My Account</a></li>
									<li><a href="myaccount.php">Resent Order</a></li>
									
     						 		<li><a href="logout.php">Logout</a></li>


     						 		

									<?php }else{ ?>
    								<li><a  href="register.php">Register</a></li>
									<li><a  href="login.php">Login</a></li>
									
									
									<?php } ?>


									
									
							
									
									
								</ul>
							</li>

						</ul>
						</nav>
					</div>
					
					

					<span class="linedivide1"></span>
					<?php if(isset($_SESSION['cart'] )) { ?>
					

					<div class="header-wrapicon2">
						<?php $cart = $_SESSION['cart']; ?>
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo count($cart)?></span>


						<!-- Header cart noti -->
						
						<div class="header-cart header-dropdown">
								<small>You have <em class="highlight">
								<?php echo count($cart)?> item(s)</em> in your shopping bag</small>
							<br>
							<br>
							<?php
								//print_r($cart);
								$total = 0;
								foreach ($cart as $key => $value) {
									//echo $key . " : " . $value['quantity'] ."<br>";
									$navcartsql = "SELECT * FROM products WHERE id=$key";
									$navcartres = mysqli_query($connection, $navcartsql);
									$navcartr = mysqli_fetch_assoc($navcartres);

								
							 ?>
							<ul class="header-cart-wrapitem">
								

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="admin/<?php echo $navcartr['thumbneil']; ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="single.php?id=<?php echo $navcartr['id']; ?>">
											
											<?php echo substr($navcartr['name'], 0 , 20); ?>
												
										</a>

										<span class="header-cart-item-info">
											<?php echo $value['quantity']; ?> x RS <?php echo $navcartr['price']; ?>.00/-
										</span>
										<div class="ci-edit">
										<!-- <a href="#" class="edit fa fa-edit"></a> -->
										<a href="delcart.php?id=<?php echo $key; ?>" class="edit fa fa-trash"></a>
									</div>
									</div>
								</li>

							
							</ul>
							<?php $total = $total + ($navcartr['price']*$value['quantity']);
							} ?>
							<div class="header-cart-total">
								Total: RS <?php echo $total; ?>.00/-

							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<?php if(isset($_SESSION['cart'])) { ?>
				<div class="header-icons-mobile">

					<?php $cart = $_SESSION['cart']; ?>
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo count($cart)?></span>
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<small>You have <em class="highlight">
								<?php echo count($cart)?> item(s)</em> in your shopping bag</small>
							<br>
							<br>
							<?php
								//print_r($cart);
								$total = 0;
								foreach ($cart as $key => $value) {
									//echo $key . " : " . $value['quantity'] ."<br>";
									$navcartsql = "SELECT * FROM products WHERE id=$key";
									$navcartres = mysqli_query($connection, $navcartsql);
									$navcartr = mysqli_fetch_assoc($navcartres);

								
							 ?>
							<ul class="header-cart-wrapitem">
								

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="admin/<?php echo $navcartr['thumbneil']; ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="single.php?id=<?php echo $navcartr['id']; ?>">
											
											<?php echo substr($navcartr['name'], 0 , 20); ?>
												
										</a>

										<span class="header-cart-item-info">
											<?php echo $value['quantity']; ?> x RS <?php echo $navcartr['price']; ?>.00/-
										</span>
									</div>
								</li>

							
							</ul>
							<?php $total = $total + ($navcartr['price']*$value['quantity']);
							} ?>
							
							<div class="header-cart-total">
								Total: RS <?php echo $total; ?>.00/-
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

<?php 
ob_start();
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 


 if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];
	$prodsql = "SELECT * FROM products WHERE id=$id";
	$prodres = mysqli_query($connection, $prodsql);
	$prodr = mysqli_fetch_assoc($prodres);
 	
 }else{
 	header('location: index.php');
 }



if( isset($_SESSION['customerid']) && !empty($_SESSION['customerid']) ){

	$uid = $_SESSION['customerid'];

	}else{
		

	}


if(isset($_POST) & !empty($_POST)){
	
	$review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);
		$cphoto = filter_var($_POST['cphoto'], FILTER_SANITIZE_STRING);



	$revsql = "INSERT INTO reviews (pid, uid, review,cphoto) VALUES ($id, $uid,'$review','$cphoto')";
	$revres = mysqli_query($connection, $revsql);
	if($revres){
		$smsg = "Review Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Review";
	}
}

 ?>



	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="admin/<?php echo $prodr['thumbneil']; ?>">
							<div class="wrap-pic-w">

								<img src="admin/<?php echo $prodr['thumbneil']; ?>" class="img-responsive" alt="IMG-PRODUCT"/>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $prodr['name']; ?>
				</h4>

				<span class="m-text17">
					RS <?php echo $prodr['price']; ?>.00/-
				</span>

				<p class="s-text8 p-t-10">
					<?php echo $prodr['description']; ?>
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>
<br>
					<form method="get" action="addtocart.php">
							<div class="p-b-45">
									<?php  echo  $prodr['qty']; ?> Items are availabel<br>
							</div>
					<div class="flex-r-m flex-w p-t-10">

						<div class="w-size16 flex-m flex-w">


							
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>

								</button>

								<input class="size8 m-text18 t-center num-product" type="text" name="quant" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
							<input type="hidden" name="id" value="<?php echo $prodr['id']; ?>">
									
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<?php if($prodr['qty'] > 1){?>
										
									<input class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" class="button btn-small" value="Add to Cart">
								

										

											<?php }else{ ?>

										<?php } ?>
								
							</div>
						</div>
					</div>
					</form>
				</div>

				<div class="p-b-45">
					<span  >Categories: 
								<?php 
								$prodcatsql = "SELECT * FROM category WHERE id={$prodr['categoryid']}"; 
								$prodcatres = mysqli_query($connection, $prodcatsql);
								$prodcatr = mysqli_fetch_assoc($prodcatres);
								?>
								<a href="index.php?id=<?php echo $prodcatr['id']; ?>"><?php echo $prodcatr['categoryname']; ?></a></span><br>
					
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						<?php echo $prodr['description']; ?>
							
							
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">

							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">


					<?php
									$revcountsql = "SELECT count(*) AS count FROM reviews r WHERE r.pid=$id";
									$revcountres = mysqli_query($connection, $revcountsql);
									$revcountr = mysqli_fetch_assoc($revcountres);

								 ?>
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						<?php echo $revcountr['count']; ?> Review<?php if( $revcountr['count'] > 1){?>s<?php }else{ ?><?php } ?> for <?php echo substr($prodr['name'], 0, 20); ?>
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
							<ul class="comment-list">
									<?php 
										$selrevsql = "SELECT u.firstname, u.lastname, r.`timestamp`, r.review, r.cphoto FROM reviews r JOIN usersmeta u WHERE r.uid=u.uid AND r.pid=$id";
										$selrevres = mysqli_query($connection, $selrevsql);
										while($selrevr = mysqli_fetch_assoc($selrevres)){
									?>
										<li>
											
											<div class="comment-meta">
												<a class="pull-left" href="#"><img class="comment-avatar" src="<?php echo $selrevr['cphoto']?>" alt="" height="35" width="35"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
												<a class="s-text12 p-b-30" href="#"><?php echo $selrevr['firstname']." ". $selrevr['lastname']; ?></a>
												<span>
												<em class="s-text11 t-center"><?php echo $selrevr['timestamp']; ?></em>
												</span><br>
											</div>
										<!--	<div class="rating2">
												<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
											</div> -->
											&nbsp&nbsp&nbsp&nbsp&nbsp<p class="s-text7 w-size27">
												<?php echo $selrevr['review']; ?>
											</p><br>
											<hr>
										</li>
									<?php } ?>
									</ul>

										<?php 
										$chkrevsql = "SELECT count(r.pid=$id) reviewcount FROM reviews r WHERE r.uid=$uid AND r.pid=$id";
										$chkrevres = mysqli_query($connection, $chkrevsql);
										$chkrevr = mysqli_fetch_assoc($chkrevres);
										if($chkrevr['reviewcount'] >= 1){
											echo "<h4 class='uppercase space20'>You have already Reviewed This Product...</h4>";
										}else{
									?>
									<h4 class="uppercase space20">Add a review</h4>
									<form id="form" class="review-form" method="post">
									<?php
										$usersql = "SELECT  u.cphoto, u.email, u1.firstname, u1.lastname FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
										$userres = mysqli_query($connection, $usersql);
										$userr = mysqli_fetch_assoc($userres);
									 ?>
										<div class="row">
											<a class="pull-left" href="#"><img class="comment-avatar" src="<?php echo $userr['cphoto']?>" alt="" height="50" width="50"></a>
											
										
											
											<div class="col-md-6 space20">
												
												<input name="name" class="input-md form-control" placeholder="Name *" maxlength="10" required="" type="text" value="<?php echo $userr['firstname'] . " " . $userr['lastname'];?>" disabled>
											</div>
											<div class="col-md-6 space20">
												<input name="email" class="input-md form-control" placeholder="Email *" maxlength="200" required="" type="hidden" value="<?php echo $userr['email']; ?>" disabled>
											</div>
											
									<!--	<div class="space20">
											<span>Your Ratings</span>
											<div class="clearfix"></div>
											<div class="rating3">
												<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
											</div>
											<div class="clearfix space20"></div>
										</div> -->
										</div>
										<div class="col-md-8 space20">
											<br><textarea name="review" id="text" class=" form-control" rows="6" placeholder="Add review.." maxlength="1000"></textarea>
										</div>
										<div class="col-md-6 space20">
												<input name="cphoto" class="input-md form-control" maxlength="100" value="<?php echo $userr['cphoto']?>"type="hidden"  >
											</div>
										
										<button type="submit" class=" btn btn-outline-primary btn-small btn-block">
										Submit Review
										</button>
									</form>
										<?php } ?>
								
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>


			<div class="wrap-slick2">
				<!-- Slide2 -->
		
				<div class="slick2">
						<?php
								$relsql = "SELECT * FROM products WHERE id != $id ORDER BY rand() LIMIT 4";
								$relres = mysqli_query($connection, $relsql);
								while($relr = mysqli_fetch_assoc($relres)){
							 ?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="admin/<?php echo $relr['thumbneil']; ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>

									<br>
										
											<a href="single.php?id=<?php echo  $relr['id']; ?>" class=" fa fa-shopping-cart flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4  " id='add'>Viwe </a>
										
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="single.php?id=<?php echo $relr['id']; ?>" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $relr['name']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									Rs <?php echo $relr['price']; ?>.00/-
								</span>
							</div>
						</div>
					</div>

					
<?php } ?>
				</div>

			</div>

		</div>
	</section>


	<!-- Footer -->
<?php include'inc/footer.php';?>
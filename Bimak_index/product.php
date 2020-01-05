<?php 

session_start();
require_once 'config/connect.php';
include 'inc/header.php'; 
include 'inc/nav.php'; 

 ?>



	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.png);">
		<h2 class="l-text2 t-center">
			Sells Items
		</h2>
		<p class="m-text13 t-center">
			New Arrivals Women Collection 2018
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<?php

							$catsql = "SELECT * FROM category";
							$catres = mysqli_query($connection, $catsql);
							while($catr = mysqli_fetch_assoc($catres))
							{ ?>
							
							<li  class="p-t-4" ><a class="s-text13" href="product.php?id=<?php echo $catr['id']; ?>"><?php echo $catr['categoryname']; ?></a></li>

						<?php } ?>

							
						</ul>

						<!-- ------->
						

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">

							<form action="productsearch.php" method="POST">
							
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="searchitem" placeholder="Search Products...">

							<button name="search" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>

						</form>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						<?php 
								$sql = "SELECT * FROM products";
								if(isset($_GET['id']) & !empty($_GET['id'])){
									$id = $_GET['id'];
									$sql .= " WHERE categoryid=$id";
								}
								

								$res = mysqli_query($connection, $sql);
								while($r = mysqli_fetch_assoc($res)){
							?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">

											<?php if($r['qty'] < 1){?>
										
									<img style="position: absolute;left: 0px;top: 0px;z-index: 2;width: 120px;" class="img1" src="images/icons/out of.png" >	
								

										

											<?php }else{ ?>

										<?php } ?>
									<img src="admin/<?php echo $r['thumbneil']; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<?php if($r['qty'] > 1){?>
											
											<a href="addtocart.php?id=<?php echo $r['id']; ?>" class=" flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4  " id='add'> Add to Cart </a>
										<?php }else{ ?>

										<?php } ?>
										<br>
										<a href="single.php?id=<?php echo $r['id']; ?>" class="  flex-c-m size1 bg4 bo-rad-23 hov1 trans-0-4  " id='add'>View </a>
								
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a  class="block2-name dis-block s-text3 p-b-5" href="single.php?id=<?php echo $r['id']; ?>"><?php echo $r['name']; ?></a>

								<span class="block2-price m-text6 p-r-5">
									RS <?php echo $r['price']; ?>.00/-
									</span>
								</div>
							</div>
						</div>
						<?php } ?>


					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include'inc/footer.php';?>
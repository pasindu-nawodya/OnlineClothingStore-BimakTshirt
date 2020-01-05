

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
					Invoice</h1>

				</div>

			</div>













			<div class="wrapper-content">
				<div class="container">
					<div class="row  align-items-center justify-content-between">
						<div class="col-11 col-sm-12 page-title">
							<h3>Purchase Bill/Invoice</h3>
							<p>Creatively crafted Dashboard for your needs</p>
						</div>
						<div class="col text-right ">

						</div>
					</div>






					<!-- ---------------------------------------------------------------------------------------------------  -->
					<div class="row-center">

						<div class="col-sm-16">


							<?php
							$csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
							$cres = mysqli_query($connection, $csql);
							$cr = mysqli_fetch_assoc($cres);

							?>
							<?php 
							if(isset($_GET['id']) & !empty($_GET['id'])){
								$oid = $_GET['id'];
							}else{
								header('location: myaccount.php');
							}
							$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
							$ordres = mysqli_query($connection, $ordsql);
							$ordr = mysqli_fetch_assoc($ordres);
							?>

							<div class="card invoice status-danger">


								<div class="card-header " >
									<h2  class=" mb-0">INVOICE <small class="pull-right">Order #<input class="pull-right " type="text" id="id" value="<?php echo $ordr['id']; ?>"  readonly></small> </h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-8"> <a class="" href="#">
											<h2><span class="fa fa-trophy"></span> Bimak</h2>
										</a> <br>
										<address >
											<strong>Billed To:</strong><br>
											

											<input type="text" id="name" value="<?php echo $cr['firstname'] ." ". $cr['lastname'] ;?>"  readonly><br>
											<input type="text" id="address1" value="<?php echo $cr['address1'] ; ?>"  readonly><br>
											<input type="text" id="address2" value="<?php echo $cr['address2'] ; ?>" readonly ><br>
											<input type="text" id="city" value="<?php echo $cr['city']  ; ?>"  readonly><br>
											<input type="text" id="state" value="<?php echo $cr['state']  ; ?>"  readonly><br>
											<input type="text" id="zip" value="<?php echo $cr['zip']  ; ?>"  readonly><br>
											<input type="text" id="mobile" value="<?php echo $cr['mobile']  ; ?>"  readonly><br>
											
										</address>

										<br>
										<address>
											<strong>Payment Method:</strong><br>
											<input type="text" id="paymentmode" value="<?php echo $ordr['paymentmode']; ?>"  readonly><br>
											
											<a href=""><input type="text" id="customer" value="<?php echo $_SESSION['customer'];?>"  readonly></a><br>
										</address>
									</div>
									<br>
									<div class="col-sm-11 text-right">
										<div class="row">
											<div class="col-sm-16">
												<h2 class="text-center">Order summary</h2>
												<br>
											</div>
										</div>
										<br>
										<address>
											<strong>Order Date:</strong><br>
											<input type="text" id="timestamp" value="<?php echo $ordr['timestamp']; ?>"  readonly><br>
											
											<p class="text-danger">Payment due April 21th, 2017</p>
											<br>
										</address>
									</div>
								</div>
								
								<div class="row-center">
									<div class="col-sm-16">
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<td class="text-center"><strong>Item</strong></td>

														<td class="text-center"><strong></strong></td>
														<td class="text-center"><strong>Quantity</strong></td>

														<td class="text-center"><strong></strong></td>
														<td class="text-center"><strong>Price </strong></td>

														<td class="text-center"><strong></strong></td>
														<td class="text-right"><strong>Totals</strong></td>
													</tr>
												</thead>
												<tbody>
													<!-- foreach ($order->lineItems as $line) or some such thing here -->
													<?php

													if(isset($r['id']) & !empty($r['id'])){
														$oid = $r['id'];
													}else{

													}
													$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
													$ordres = mysqli_query($connection, $ordsql);
													$ordr = mysqli_fetch_assoc($ordres);

													$orditmsql = "SELECT * FROM  orderitems o JOIN products p WHERE o.orderid='$oid' AND o.pid=p.id  ";
													$orditmres = mysqli_query($connection, $orditmsql);
													while($orditmr = mysqli_fetch_assoc($orditmres)){
														?>
														<tr>

															<td class="text-center">
																<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="iname" value="<?php echo substr($orditmr['name'], 0, 25); ?>"  readonly><br>
																
															</td>
															
															<td></td>
															<td class="text-center">
																<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="pquantity" value="<?php echo $orditmr['pquantity']; ?>"  readonly><br>
																
															</td>
															
															<td></td>

															<td class="text-center">
																<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="productprice" value="Rs <?php echo $orditmr['productprice']; ?>/-"  readonly>

															</td>
															
															<td></td>
															<td>
																<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="alltotal" value="Rs <?php echo $orditmr['productprice']*$orditmr['pquantity']; ?>/-"  readonly>
																
															</td>
														</tr>
													<?php } ?>


													<tr>

														

														<td></td>
														<td></td>
														<td></td>
														<td></td>


														<td>
															Order_Total
														</td>

														<td></td>
														<td>
															
															<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="totalprice" value="Rs <?php echo $ordr['totalprice']; ?>"  readonly>
															
														</td>
													</tr>
													<tr>

														

														<td></td>
														<td></td>
														<td></td>
														<td></td>
														


														<td>
															Order_Status
														</td>
														<td></td>
														<td >
															<b> <input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="orderstatus" value="<?php echo $ordr['orderstatus']; ?>"  readonly>
															</b>
														</td>
													</tr>
													<tr>
														
														

														<td></td>
														<td></td>
														<td></td>
														<td></td>
														
														
														<td>
															Order_Placed_On
														</td>
														<td></td>
														<td>
															<b>
																<input style=" background-color: rgba(255, 255, 255, 0.1);" class="text-center " type="text" id="timestamp" value="<?php echo $ordr['timestamp']; ?>"  readonly>
															</b>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-16">
										<hr>
									</div>
									<div class="col-sm-8"> We recommend pwoer services for our customers </div>
									<div class="col-sm-8 text-right"> Authorized by,<br>
										<b>Bimak</b> </div>
									</div>
									<br>
									<br>
									<br>
								</div>
								<div class="card-footer align-items-center justify-content-between d-flex">
									<button class="btn btn-outline-white pull-right">Back to item</button>
									<a href='EmployeeReport.pdf'><button id="button" value="Submit" class="btn btn-white" ><i class="fa fa-print"></i> Print</button>
									</a>

								</div>
							</div>
						</div>
					</div>


					<!-- ---------------------------------------------------------------------------------------------------  -->

				</div>

			</div>
			<br>









<?php   require('fpdf/fpdf.php');  // MAKE SURE YOU HAVE THIS LINE

  

 

		$pdf = new FPDF();
   		 $pdf->AddPage();

    //$pdf->SetFont('Arial','B',16);
    //$pdf->Cell(40,10,'Hello Blslslslsls!');

   // $pdf->Cell(80,10,'Employee List',1,0,'C');




	

	
	 	$pdf->SetFont('times','',14);
	 
	 			




$csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u1.city, u1.state, u1.country, u1.company, u.email, u1.mobile, u1.zip FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
							$cres = mysqli_query($connection, $csql);
							$cr = mysqli_fetch_assoc($cres);

							?>
							<?php 
							if(isset($_GET['id']) & !empty($_GET['id'])){
								$oid = $_GET['id'];
							}else{
								header('location: myaccount.php');
							}
							$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
							$ordres = mysqli_query($connection, $ordsql);
							$ordr = mysqli_fetch_assoc($ordres);

    $pdf->Image('images/invoice.png',4,4,200);

    		$pdf->Cell(190,25, '',0,4);                $pdf->Cell(196,5,'Order Id#',0,1,'R'); $pdf->Cell(196,5, $_GET['id'],0,1,'R');  
		$pdf->Cell(190,10, 'Billing To:',0,4);         
		$pdf->Cell(190,5, $cr['firstname'],0,1);
		$pdf->Cell(190,5, $cr['address1'],0,1);
		$pdf->Cell(190,5, $cr['address2'],0,1);
		$pdf->Cell(190,5, $cr['city'],0,1);
		$pdf->Cell(190,5, $cr['state'],0,1);
		$pdf->Cell(190,5, $cr['zip'],0,1);
		$pdf->Cell(190,5, $cr['mobile'],0,1);
$pdf->Cell(190,10, '',0,2); 
		$pdf->Cell(190,6,'payment mode:',0,1);            
		$pdf->Cell(190,6,$ordr['paymentmode'],0,1);

$pdf->Cell(190,10, '',0,2); 


					$pdf->Cell(47.5,10,'Name',1,0 ,'C');
	 					$pdf->Cell(47.5,10,'Quantity',1,0 ,'C');
	 					$pdf->Cell(47.5,10,'Product Price',1,0 ,'C');
	 				
	 					$pdf->Cell(47.5,10,'Totle',1,1 ,'C');


			if(isset($r['id']) & !empty($r['id'])){
				$oid = $r['id'];
					}else{

					}
				$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id='$oid'";
				$ordres = mysqli_query($connection, $ordsql);
				$ordr = mysqli_fetch_assoc($ordres);

				$orditmsql = "SELECT * FROM  orderitems o JOIN products p WHERE o.orderid='$oid' AND o.pid=p.id  ";
					$orditmres = mysqli_query($connection, $orditmsql);
	 			while($orditmr = mysqli_fetch_assoc($orditmres)){

	 					$pdf->SetFont("Arial","B",10);
	 					$pdf->Cell(47.5,10,$orditmr['name'],1,0 ,'C');
	 					$pdf->Cell(47.5,10,$orditmr['pquantity'],1,0 ,'C');
	 					$pdf->Cell(47.5,10,$orditmr['productprice'],1,0 ,'C');
	 				
	 					$pdf->Cell(47.5,10,$orditmr['productprice']*$orditmr['pquantity'],1,1 ,'C');





	 			}	
	 				$pdf->Cell(95,10,'',0,0,'C');
	 				$pdf->Cell(47.5,10,'Totle',1,0,'C');
	 				$pdf->Cell(47.5,10,$ordr['totalprice'],1,1,'C');

	 				$pdf->Cell(95,10,'',0,0,'C');
	 				$pdf->Cell(47.5,10,'Order_Status',1,0,'C');
	 				$pdf->Cell(47.5,10,$ordr['orderstatus'],1,1,'C');


	 				$pdf->Cell(95,10,'',0,0,'C');
	 				$pdf->Cell(47.5,10,'Order_Placed_On',1,0,'C');
	 				$pdf->Cell(47.5,10,$ordr['timestamp'],1,1,'C');





	  $pdf->Output("EmployeeReport.pdf",'F');














     ?>













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



<script>

	$('#button').click(function() {
		
		

		
		


	});
</script>

<div class="clearfix space70"></div>
<?php include'inc/footer.php';?>
<?php

	require('fpdf.php');

	$conn = new mysqli("localhost","root","1234","bimak");


	$id = $_GET['edit'];

	 $sql = "select * from products where id=$id";
     $runsql = mysqli_query($conn, $sql);

    $pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('times','i',14);
	//$pdf->Cell(40,10,'Hello World OOOO!');
	$pdf->Image('logo.png',10,5,35);
	$pdf->Cell(40,35,'Bimak Fashion for Era!');



	$pdf->Ln(10);

	$pdf->SetFont('times','',14);
	//$pdf->Cell(10,10,'Gampaha Road');
	//$pdf->Cell(150,10,'Yakkala');

	$pdf->Cell(190,8,"No. 65/2",0,1,'R');
	$pdf->Cell(190,8,"Gampaha Road",0,1,'R');
	$pdf->Cell(190,8,"Yakkala",0,1,'R');
	$pdf->Cell(190,8,"033-2233054",0,1,'R');


	 $pdf->Ln(30);
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,10,"Item Details",1,1,'C');
    
    $pdf->SetFont('Arial','B',11);

	$conn = new mysqli("localhost","root","1234","bimak");
	$id = $_GET['edit'];

	 $sql = "select * from products where id=$id";
     $runsql = mysqli_query($conn, $sql);

		//$pdf->Ln(20);
	$pdf->Cell(190,30,'',0,1,'C');


	$row = mysqli_fetch_array($runsql);
    
     		$pdf->Cell(95,10,'ID :',0,0,'C');
     		$pdf->Cell(95,10,$row['id'],0,1,'L');

     		$pdf->Cell(95,10,'Item Name :',0,0,'C');
     		$pdf->Cell(95,10,$row['name'],0,1,'L');

     		$pdf->Cell(95,10,'Item Unit Price :',0,0,'C');
     		$pdf->Cell(95,10,$row['price'],0,1,'L');

     		$pdf->Cell(95,10,'Quantity :',0,0,'C');
     		$pdf->Cell(95,10,$row['qty'],0,1,'L');

     		$pdf->Cell(95,10,'Size of item :',0,0,'C');
     		$pdf->Cell(95,10,$row['size'],0,1,'L');

     		$pdf->Cell(95,10,'Description :',0,0,'C');
     		$pdf->Cell(95,10,$row['description'],0,1,'L');



	//$pdf->Cell(25,10,"Employee's Name :",0,1,'C');     


	
	$pdf->Output();

?>
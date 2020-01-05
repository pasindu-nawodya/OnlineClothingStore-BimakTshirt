<?php

	require('fpdf.php');

	$conn = new mysqli("localhost","root","1234","bimak");


	 $sql = "select * from products";
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
	$pdf->Cell(190,10,"Item List",1,1,'C');
    
    $pdf->SetFont('Arial','B',11);

	$pdf->Cell(10,10,"ID",1,0,'C');
	$pdf->Cell(30,10,"Item Name",1,0,'C');
	$pdf->Cell(30,10,"Unit Price",1,0,'C');
	$pdf->Cell(25,10,"Quantity",1,0,'C');
	$pdf->Cell(25,10,"Size",1,0,'C'); 
	$pdf->Cell(70,10,"Description",1,1,'C');

	



     while($row = mysqli_fetch_array($runsql))
     {
     	$pdf->SetFont("Arial","B",11);
		
		$pdf->Cell(10,10,$row['id'],1,0,'C');
        $pdf->Cell(30,10,$row['name'],1,0,'C');
        $pdf->Cell(30,10,$row['price'],1,0,'C');
        $pdf->Cell(25,10,$row['qty'],1,0,'C');
       	$pdf->Cell(25,10,$row['size'],1,0,'C');  
        $pdf->Cell(70,10,$row['description'],1,1,'C'); 
        



	}


	//$pdf->Cell(25,10,"Employee's Name :",0,1,'C');     


	
	$pdf->Output();

?>
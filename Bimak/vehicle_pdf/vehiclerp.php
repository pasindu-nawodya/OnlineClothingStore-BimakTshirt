

<?php

if(isset($_GET['edit'])){
	$conn = new mysqli("localhost","root","1234","bimak");
	
	$id = $_GET['edit'];

    $SQL = "SELECT * FROM vehicle where vehicle_id=$id";
    
    //$run = mysqli_query($SQL,$conn) or die ("SQL error");

    $run = mysqli_query( $conn,$SQL) or trigger_error(mysqli_error($conn));

    require('fpdf.php');  // MAKE SURE YOU HAVE THIS LINE




    $pdf = new FPDF();
    $pdf->AddPage();

    //$pdf->SetFont('Arial','B',16);
    //$pdf->Cell(40,10,'Hello Blslslslsls!');

   // $pdf->Cell(80,10,'Employee List',1,0,'C');


    $pdf->Image('logo.png',10,5,35);
    $pdf->SetFont('times','i',14);
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

    $pdf->Cell(190,10,"Vehicle Details",1,2,'C');
    $pdf->Ln(20);
    $pdf->SetFont('Arial','B',10);
	
	$row = mysqli_fetch_array($run);

	$pdf->Cell(95,10,"ID",0,0,'C');
	$pdf->Cell(95,10,$row['vehicle_id'],0,1,'C');
	$pdf->Cell(95,10,"Reg No",0,0,'C'); 
	$pdf->Cell(95,10,$row['vreg_no'],0,1,'C');
	$pdf->Cell(95,10,"Type",0,0,'C');
	$pdf->Cell(95,10,$row['v_type'],0,1,'C');
	$pdf->Cell(95,10,"Desc",0,0,'C');  
    $pdf->Cell(95,10,$row['vdesc'],0,1,'C');
	

    $pdf->Output();

}
?>
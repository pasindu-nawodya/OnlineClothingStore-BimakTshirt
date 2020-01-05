<?php

	require('fpdf.php');

	$conn = new mysqli("localhost","root","1234","bimak");


	 $sql = "select * from salary s,employee e where s.empID=e.id";
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
	$pdf->Cell(190,10,"Employee Salary Details",1,1,'C');
    
    $pdf->SetFont('Arial','B',11);

	$pdf->Cell(10,10,"ID",1,0,'C');
	$pdf->Cell(50,10,"Employee Name",1,0,'C');
	$pdf->Cell(30,10,"Basic",1,0,'C');
	$pdf->Cell(25,10,"Bonus",1,0,'C');
	$pdf->Cell(25,10,"Deduction",1,0,'C'); 
	$pdf->Cell(25,10,"Date",1,0,'C');
	$pdf->Cell(25,10,"Net Salary",1,1,'C');

	



     while($row = mysqli_fetch_array($runsql))
     {
     	$pdf->SetFont("Arial","B",11);
		
		$pdf->Cell(10,10,$row['empID'],1,0,'C');
        $pdf->Cell(50,10,$row['ename'],1,0,'C');
        $pdf->Cell(30,10,$row['basic'],1,0,'C');
        $pdf->Cell(25,10,$row['bonus'],1,0,'C');
       	$pdf->Cell(25,10,$row['deduction'],1,0,'C');
       	$pdf->Cell(25,10,$row['sdate'],1,0,'C');  
        $pdf->Cell(25,10,$row['total'],1,1,'C'); 
        //$pdf->Cell(25,10,$row['ename'],1,1,'C'); 



	}

	$conn = new mysqli("localhost","root","1234","bimak");


	 $sql = "select * from salary s,employee e where s.empID=e.id";
     $runsql = mysqli_query($conn, $sql);

		//$pdf->Ln(20);
	$pdf->Cell(190,30,'',0,1,'C');

	/*$pdf->Cell(40,10,'Name :',0,0,'C');
	$pdf->Cell(30,10,'NIC :',0,0,'C');
	$pdf->Cell(30,10,'Phone :',0,0,'C');
	$pdf->Cell(30,10,'Emp Type :',0,0,'C');
	$pdf->Cell(30,10,'Bonus Type :',0,0,'C');
	$pdf->Cell(30,10,'Deduction Type :',0,1,'C');*/

	while($row = mysqli_fetch_array($runsql))
     {
     		$pdf->Cell(30,10,'Name :',0,0,'L');
     		$pdf->Cell(30,10,$row['ename'],0,1,'L');
     		$pdf->Cell(30,10,'NIC :',0,0,'L');
     		$pdf->Cell(30,10,$row['nic'],0,1,'L');
     		$pdf->Cell(30,10,'Phone :',0,0,'L');
     		$pdf->Cell(30,10,$row['phone'],0,1,'L');
     		$pdf->Cell(30,10,'Emp Type :',0,0,'L');
     		$pdf->Cell(30,10,$row['type'],0,1,'L');
     		$pdf->Cell(30,10,'Bonus Type :',0,0,'L');
     		$pdf->Cell(30,10,$row['bonusType'],0,1,'L');
     		$pdf->Cell(30,10,'Deduction Type :',0,0,'L');
     		$pdf->Cell(30,10,$row['deductionType'],0,1,'L');


     }


	//$pdf->Cell(25,10,"Employee's Name :",0,1,'C');     


	
	$pdf->Output();

?>
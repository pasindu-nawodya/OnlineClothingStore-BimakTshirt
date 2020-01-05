<?php

	require('fpdf.php');
	require 'bimak_conn.php';

	

	 // get table data
	 $sql = "SELECT * FROM expences" ;
     $runsql = mysqli_query($conn, $sql);
	 
	 // calculate total entries
     $total_entries = "select count(id) from expences";
     $run_entries = mysqli_query($conn, $total_entries);

     while($entries = mysqli_fetch_array($run_entries)){
            $entry = $entries['count(id)']; 
     }
	 
	 // calculate total amount
	 $total_amount = "select sum(amount) from expences";
     $run_total = mysqli_query($conn, $total_amount);

     while($total = mysqli_fetch_array($run_total)){
            $amount = $total['sum(amount)'];
     }
	 
	 

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
	$pdf->Cell(190,10,"Expences Report",1,1,'C');
    
    $pdf->SetFont('Arial','B',11);

//============================================
	$pdf->Cell(10,10,"ID",1,0,'C');
	$pdf->Cell(30,10,"Date",1,0,'C');
	$pdf->Cell(60,10,"Category",1,0,'C');
	$pdf->Cell(35,10,"Amount (Rs)",1,0,'C');
	$pdf->Cell(55,10,"Description",1,0,'C'); 
	
	
	
//=================================================
	


// data column
     while($row = mysqli_fetch_array($runsql))
     {
     	$pdf->SetFont("Arial","B",11);
		$pdf->Ln(10);
		$pdf->Cell(10,10,$row['id'],1,0,'C');
        $pdf->Cell(30,10,$row['date'],1,0,'C');
        $pdf->Cell(60,10,$row['category'],1,0,'C');
        $pdf->Cell(35,10,$row['amount'],1,0,'C');
       	$pdf->Cell(55,10,$row['note'],1,0,'C');
       	  
         
        



	}
	
	$pdf->Ln(15);
	$pdf->SetFont("Arial","B",12);
	$pdf->Cell(35,10,"Number of Entries : ",0,1,'L');
	$pdf->Cell(10,2,$entry,0,1,'L');
	
	
	$pdf->Ln(0);
	$pdf->SetFont("Arial","B",12);
	$pdf->Cell(35,10,"Total Amount: Rs  ",0,1,'L');
	$pdf->Cell(10,2,$amount,0,1,'L');

	    


	
	$pdf->Output();

?>
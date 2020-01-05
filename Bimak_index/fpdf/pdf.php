

<?php

	$conn = new mysqli("localhost","root","1234","bimak");


    $SQL = "SELECT * FROM employee ";
    
    //$run = mysqli_query($SQL,$conn) or die ("SQL error");

    $run = mysqli_query( $conn,$SQL) or trigger_error(mysqli_error($conn));

    require('fpdf.php');  // MAKE SURE YOU HAVE THIS LINE

    echo "PDF Generated Please Download below

    		<a href='EmployeeReport.pdf'>Download</a>
    ";






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

    $pdf->Cell(190,10,"Employee Details",1,1,'C');
    
    $pdf->SetFont('Arial','B',10);

	$pdf->Cell(10,10,"ID",1,0,'C');
	$pdf->Cell(50,10,"Employee Name",1,0,'C');
	$pdf->Cell(65,10,"Email",1,0,'C');
	$pdf->Cell(25,10,"Phone",1,0,'C');
	$pdf->Cell(20,10,"NIC",1,0,'C'); 
	$pdf->Cell(20,10,"Emp Type",1,1,'C');

	while($row = mysqli_fetch_array($run))
{

		$pdf->SetFont("Arial","B",10);
		$pdf->Cell(10,10,$row['id'],1,0);
        $pdf->Cell(50,10,$row['ename'],1,0);
        $pdf->Cell(65,10,$row['email'],1,0);
        $pdf->Cell(25,10,$row['phone'],1,0);
       	$pdf->Cell(20,10,$row['nic'],1,0);  
        $pdf->Cell(20,10,$row['type'],1,1);     

}

    $pdf->Output("EmployeeReport.pdf",'F');


?>
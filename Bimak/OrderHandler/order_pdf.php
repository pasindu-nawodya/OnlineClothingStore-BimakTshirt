<?php
//call the FPDF library
require('fpdf17/fpdf.php');
require'config.php';

$orderId = $_POST['oid'];

//get delivery Details
$query = mysqli_query($con,"select * from delivery_details
	where
	oId = '".$orderId."'");
$details = mysqli_fetch_array($query);




class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('images/invoice.png',10,10,189);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
  
    // Line break
    $this->Ln(25);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function HomeDelivery(){
	
	
}
}

// Instanciation of inherited class
$pdf = new PDF();

$pdf->AliasNbPages();

$pdf->AddPage();
//Title
$pdf->SetFont('Arial','BU',25);
$pdf->Ln(10);
$pdf->Cell(80);
$pdf->Cell(30,10,'Order Delivery Report',0,0,'C');

//Order details
$pdf->SetFont('Arial','',15);
$pdf->Ln(25);
$pdf->Cell(35);
$pdf->Cell(70,5,'Order Id:',0,0);
$pdf->Cell(130,5,$details['oId'],0,0);


$pdf->Ln(10);
$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Customer Name:',0,0);
$pdf->Cell(130,5,$details['cName'],0,0);
$pdf->Ln(10);


$pdf->SetFont('Arial','BU',18);
$pdf->Cell(15);
$pdf->Cell(70,5,'Delivery Address',0,0);
$pdf->Ln(10);


$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'No:',0,0);
$pdf->Cell(130,5,$details['No'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'City:',0,0);
$pdf->Cell(130,5,$details['city'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Province:',0,0);
$pdf->Cell(130,5,$details['province'],0,0);
$pdf->Ln(10);


if($details['courier'] == ''){
$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Delivery Type:',0,0);
$pdf->Cell(130,5,'Home delivery',0,0);
$pdf->Ln(10);


$pdf->SetFont('Arial','BU',18);
$pdf->Cell(15);
$pdf->Cell(70,5,'Deliveryman`s Details',0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Employee Id:',0,0);
$pdf->Cell(130,5,$details['empId'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Employee Name:',0,0);
$pdf->Cell(130,5,$details['empName'],0,0);
$pdf->Ln(10);

$pdf->SetFont('Arial','BU',18);
$pdf->Cell(15);
$pdf->Cell(70,5,'Delivery Vehicle Details',0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Vehicle Id:',0,0);
$pdf->Cell(130,5,$details['vId'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Vehicle Type:',0,0);
$pdf->Cell(130,5,$details['vehicleType'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Registration Number:',0,0);
$pdf->Cell(130,5,$details['RegNo'],0,0);
$pdf->Ln(10);

}
$pdf->SetFont('Arial','BU',18);
$pdf->Cell(15);
$pdf->Cell(70,5,'Courier Service Details',0,0);
$pdf->Ln(10);


$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Courier Service:',0,0);
$pdf->Cell(130,5,$details['courier'],0,0);
$pdf->Ln(15);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Delivery Assigned Date:',0,0);
$pdf->Cell(130,5,$details['assigned_date'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Delivery Delivered Date:',0,0);
$pdf->Cell(130,5,$details['delivered_date'],0,0);
$pdf->Ln(10);

$pdf->Cell(35);
$pdf->SetFont('Arial','',15);
$pdf->Cell(70,5,'Delivery Delivery Status:',0,0);
$pdf->Cell(130,5,$details['del_status'],0,0);
$pdf->Ln(10);

























$pdf->Output();

?>
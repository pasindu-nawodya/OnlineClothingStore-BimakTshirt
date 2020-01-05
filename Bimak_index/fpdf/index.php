<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Example of PDF file using PHP and MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div class="container" style="padding-top:50px">
<h2>Generate PDF file from MySQL Using PHP</h2>
<form class="form-inline" method="post" action="pdf.php">
<button type="dpwnload" id="pdf" name="generate_pdf" download="emp.pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Generate PDF</button>

	<a href="emp.pdf">Download</a>

		<!--<a href="./ITP_Project/Bimak/fpdf/emp.pdf" download="emp.pdf">Download the pdf</a> -->

</form>
</fieldset>
</div>
</body>
</html>
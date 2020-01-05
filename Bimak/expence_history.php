<!DOCTYPE html>
<html>
<head>
	<title> Bimak expences </title>
	<link rel="stylesheet" type="text/css" href="css/exp_history.css">
</head>
<body>
	
	
	
	<?php
		// get database connection
		require 'php/bimak_conn.php';
	?>

<div class="exp_full_container">

	
	

	<div class="exp_table">
		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_finance.php">Go back</a></h2>
		<?php
		// Show inserted data in a table
		//===========================================================================================
		

		if(isset($_GET['view'])){
			echo "

				<table width='800' id='expence'>
				<tr align='center'>
					<th> ID </th>
					<th> Date </th>
					<th> Category </th>
					<th> Amount </th>
					<th> Note </th>
					<th> Delete </th>
					<th> Update </th>
				</tr>	
				

			";

			$sel_qry = "select * from expences";
			$run_qry = mysqli_query($conn, $sel_qry);

			while ($row = mysqli_fetch_array($run_qry)){
				$e_id = $row['id'];
				$e_date = $row['date'];
				$e_catgry = $row['category'];
				$e_amount = $row['amount'];
				$e_note = $row['note'];


				echo "
				<tr align='center'>
					<td> $e_id </td>
					<td> $e_date </td>
					<td> $e_catgry </td>
					<td> $e_amount </td>
					<td> $e_note </td>
					<td><a href='expence_history.php?del=$e_id'> Delete </td>
					<td><a href='expence_history.php?edit=$e_id'> Edit </td>

				</tr>	
				

				";
			}
			echo "</table> ";

			

			
		}

		//======================================================================================

		?>

	</div>

		<!-- ========================EDIT AND DELETE SECTION ==================================== -->
		<?php	
		// Deleting Redords

			if(isset($_GET['del'])){

				$del_id = $_GET['del'];

				$del_qry = "delete from expences where id='$del_id'";

				$run_del_qry = mysqli_query($conn, $del_qry);

				if($run_del_qry){
						echo "<script> alert('A record has been deleted..!') </script>";
						echo "<script> window.open('expence_history.php?view','_self')</script>";
				}

			}

		?>
	
	
		<?php
		// Editing Records
					
			if(isset($_GET['edit'])){

				$edit_id = $_GET['edit'];
				$get_expnce = "select * from expences where id = '$edit_id'";

				$run_expnce = mysqli_query($conn, $get_expnce);
				$row_expnce = mysqli_fetch_array($run_expnce);

				$exp_id = $row_expnce['id'];
				$exp_date = $row_expnce['date'];
				$exp_category = $row_expnce['category'];
				$exp_amount = $row_expnce['amount'];
				$exp_note = $row_expnce['note'];

				echo "

				<table width='800' id='expence'>
				<tr align='center'>
					<th> ID </th>
					<th> Date </th>
					<th> Category </th>
					<th> Amount </th>
					<th> Note </th>
					<th> Delete </th>
					<th> Update </th>
				</tr>	
				

			";

			$sel_qry = "select * from expences";
			$run_qry = mysqli_query($conn, $sel_qry);

			while ($row = mysqli_fetch_array($run_qry)){
				$e_id = $row['id'];
				$e_date = $row['date'];
				$e_catgry = $row['category'];
				$e_amount = $row['amount'];
				$e_note = $row['note'];


				echo "
				<tr align='center'>
					<td> $e_id </td>
					<td> $e_date </td>
					<td> $e_catgry </td>
					<td> $e_amount </td>
					<td> $e_note </td>
					<td><a href='expence_history.php?del=$e_id'> Delete </td>
					<td><a href='expence_history.php?edit=$e_id'> Edit </td>

				</tr>	
				
				";
			 }
			 echo "</table> ";

	?>


	<!-- ========= EDITING FORM ============== -->
	<div class="edit_form">
		<div>
			<h2> Update Details here.. </h2>
		</div>	
		<?php			

				echo "
				<form action='' method='post'> 
					<input type='date' name='u_date' value='$exp_date'/></br></br>
					
					<select name='u_category'>
						<option value='' disabled selected>Select Expense Category</option>
						<option value='Electricity bill'>Electricity bill</option>
						<option value='Water bill'>Water bill</option>
						<option value='Machine maintenance'>Machine maintenance</option>
						<option value='Vehicle maintenance'>Vehicle maintenance</option>
						<option value='Fuel cost'>Fuel cost</option>
						<option value='Repairs'>Repairs</option>
						<option value='Other'>Other </option>
					</select></br></br>

					<input type='text' name='u_amount' value='$exp_amount'/> </br></br>
					<textarea name='u_note' value='$exp_note'></textarea> </br> </br> 

					<input type='submit' name='update' value='Save Chages'/> </br>

				</form>
				<h3><a href='expence_history.php?view'>Discard Editing</a></h3>

				";
				

			}

			if(isset($_POST['update'])){

				$update_id = $exp_id;

				$date = $_POST['u_date'];
				$category = $_POST['u_category'];
				$amount = $_POST['u_amount'];
				$note = $_POST['u_note'];

				$update_expences = "update expences set date='$date', category='$category', amount='$amount', note='$note' where id='$update_id'";	

				$run_update = mysqli_query($conn, $update_expences);

				if($run_update){
					echo "<script> alert('Selected record has been updated..!')</script>";
					echo "<script> window.open('expence_history.php?view','_self')</script>";
				}



			}		
		?>
	</div>


	<!--============== CALCULATE TOTAL VALUES ====================-->

	<div class="table_entry">
		<p> Numbers of Entries : 
				<?php

					// calculate total entries
					$total_entries = "select count(id) from expences";
					$run_entries = mysqli_query($conn, $total_entries);

					while($entries = mysqli_fetch_array($run_entries)){
						echo $entries['count(id)'];	
					}
				?>
		</p>

	</div>

	<div class="table_total">
		<p> Total Amount &nbsp &nbsp &nbsp &nbsp &nbsp: Rs 

				<?php

					// calculate total amount
					$total_amount = "select sum(amount) from expences";
					$run_total = mysqli_query($conn, $total_amount);

					while($total = mysqli_fetch_array($run_total)){
						echo $total['sum(amount)'];
					}
				?>
		</p>

	</div>

	<!-- ============================================================= -->

<!--  Filter expences for analysis
	<div class="filter">
		<p> Select catogory here </p>
		<select name='f_category'>
						<option value='' disabled selected>Select Expense Category</option>
						<option value='Electricity bill'>Electricity bill</option>
						<option value='Water bill'>Water bill</option>
						<option value='Machine maintenance'>Machine maintenance</option>
						<option value='Vehicle maintenance'>Vehicle maintenance</option>
						<option value='Fuel cost'>Fuel cost</option>
						<option value='Repairs'>Repairs</option>
						<option value='Other'>Other </option>
					</select> 
		<input type="submit" name="f_submit" value="Search" class="f_submit">


	</div>	 -->

	<!--=========================== CHARTS ============================================== -->

	<!-- insert PIE chart -->
	<div id="piechart">

		<p>Chart of Expences - Total </p>

				<?php
				//fetching darta
				$query = "SELECT category, SUM(amount)as s_amount FROM expences GROUP BY category";
				$chart_qry = mysqli_query($conn, $query);

				?>

	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">

	      google.charts.load("current", {packages:["corechart"]});
	      google.charts.setOnLoadCallback(drawChart);
	      function drawChart() {
	        var data = google.visualization.arrayToDataTable([
	          ['Expence', 'Amount'],

			          <?php
			          // insert data into pie chart
			          while($row = mysqli_fetch_array($chart_qry)){

			          	echo "[' ".$row["category"]." ', ".$row["s_amount"]." ],";

			          }

			          ?>
	          
	        ]);

	        var options = {
	          //title: 'Expences chart',
	          pieHole: 0.4,
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	        chart.draw(data, options);
	      }
	    </script>
  		<div id="donutchart" style="width: 1100px; height: 700px;"></div>
  

	</div>
 




</div>		


</body>
</html>
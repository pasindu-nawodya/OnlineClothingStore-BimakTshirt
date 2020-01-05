<?php 
	session_start();
	require_once '../config/connect.php'; 
	if (!isset($_SESSION['email'])& empty($_SESSION['email'])) {
		header('location: login.php');
	}


?>
<?php include 'inc/header.php';?>
<?php include 'inc/nav.php';?>


			
<section id="content">
	<div class="content-blog">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Lastname Name</th>
						<th>timestemp</th>
						<th>telephone</th>
						<th>email</th>
						<th>cphoto</th>

					</tr>
				</thead>
				<tbody>
				<?php 	
					$sql = "SELECT * FROM users";
					$res = mysqli_query($connection, $sql); 


 


 
					while ($r = mysqli_fetch_assoc($res)) {
						
				?>
					<tr>
						<th scope="row"><?php echo $r['id']; ?></th>
						<td><?php echo $r['firstname']; ?></td>
						<td><?php echo $r['lastname']; ?></td>
						<td><?php echo $r['timestemp']; ?></td>
						<td><?php echo $r['telephone']; ?></td>
						<td><?php echo $r['email']; ?></td>
						<td><?php if($r['cphoto']){ echo "Yes";}else{echo "No";} ?></td>
						<td><a href="delproduct.php?id=<?php echo $r['id']; ?>">Delete</a></td>
					</tr>

				<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

</section>
	
<?php include'inc/footer.php';?>
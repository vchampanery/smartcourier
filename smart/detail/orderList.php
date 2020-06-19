<?php 

require '../config.php';



$orderlist = "select fname from user ";
$result = $mysqli->query($orderlist);
$userListObj = $result -> fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<?php include "../layout/links.html"; ?>

	
</head>
<body>
	<div class="container">
	  <div class="row">
	   <?php include "../layout/header.php"; ?>
	  
	     	<?php include "../layout/leftsidebar.php"; ?>
	     	<div class="col-sm-8" style="height: 400px;">
	     		<div class="scroll">
	     		<center>
					<hr>
					<table id="myTable">
						<thead>
							<th>fname</th>
							<!-- <th>order_ID</th> -->
						</thead>
						<tbody>
							<?php foreach ($userListObj as $key => $value) {
							?>
							<tr>
								<td><?php echo $value['fname'];?></td>
							
							</tr>
							<?php
							}?>
						</tbody>
					</table>
				</center>
				</div>
	     	</div>
	     	<?php include "../layout/rightsidebar.php"; ?>
	     	<?php include "../layout/footer.php"; ?>
	  </div>
	</div>
	<center>
		
	</center>
	<script >
		$(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	</script>
</body>
</html>
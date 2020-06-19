<?php 
require '../config.php';



$query = "select * from user";
$result = $mysqli->query($query);
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
							<th>lname</th>
							<th>mobile_number</th>
							<th>email</th>
							<th>action</th>
						</thead>
						<tbody>
							<?php foreach ($userListObj as $key => $value) {
							?>
							<tr>
								<td><?php echo $value['fname'];?></td>
								<td><?php echo $value['lname'];?></td>
								<td><?php echo $value['mobile_number'];?></td>
								<td><?php echo $value['email'];?></td>
								<td><a href="userEdit.php?id=<?php echo $value['id'];?>" >edit</a>&nbsp;<a href="javascipt:void(0);" onclick="deleteconfirm(<?php echo $value['id'];?>);">delete</a></td>
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
		function deleteconfirm(id){
			var confirm_value = confirm("Are you sure you want to delete record id = "+id+" ?");
			if(confirm_value == true){
				window.location = "userDelete.php?id="+id;
			}
		}
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
<?php 

require '../config.php';

/*$_SESSION['USERNAME'] = $fnameMyProfile;*/
/*die('test');*/
/*$fname = $_REQUEST['fname'];*/
$myprofile = "select * from user where fname = '".$_SESSION['USERNAME']."'";

$result = $mysqli->query($myprofile);
$userListObj = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// var_dump($userListObj);
$value = $userListObj[0];

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
					<table id="myTable" border="5">
						<thead>
							<th>fname</th>
							<th>lname</th>
							<th>mobile_number</th>
							<th>email</th>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $value['fname'];?></td>
								<td><?php echo $value['lname'];?></td>
								<td><?php echo $value['mobile_number'];?></td>
								<td><?php echo $value['email'];?></td>
							</tr>
							
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
    $('#example').DataTable();
} );
	</script>
</body>
</html>

















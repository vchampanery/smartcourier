<?php 

require '../config.php';


$id = $_REQUEST['id'];
$query = "select * from user where id=".$id;
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
	     		<center>
					<hr>
					<form action="../reg/registrationCode.php?type=edit" onsubmit="return validaion()" class="bg-light" method="POST">

					<!--<div class="dropdown">
					    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Users Type->
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
						    <li><a href="#">company</a></li>
						    <li><a href="#">user</a></li>
						    <li><a href="#">delivery boy</a></li>
					    </ul>
					</div>-->
					<input type="hidden" name="userid" value="<?php echo isset($userListObj[0]['fname'])?$userListObj[0]['id']:''; ?>">
					<div class="form-group">
						<label>fname: </label>
						<input type="text" name="fname" class="form-control" id="fname" value="<?php echo isset($userListObj[0]['fname'])?$userListObj[0]['fname']:''; ?>">
						<span id="message" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>lname: </label>
						<input type="text" name="lname" class="form-control" id="lname">
						<span id="messagelname" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>Mobile number: </label>
						<input type="text" name="mobile_number" class="form-control" id="mobile">
						<span id="messagemobile" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>Email: </label>
						<input type="Email" name="email" class="form-control" id="email">
						<span id="messageemail" style="color: red"></span>
					</div><center>
					<input type="submit" name="submit" value="submit" class="btn btn-success">
					<input type="reset" name="reset" value="reset" class="btn btn-danger">
					<input type="submit" name="back" value="back" class="btn btn-info" onclick="back_redirection();">
					</center>
				</form>
				</center>
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
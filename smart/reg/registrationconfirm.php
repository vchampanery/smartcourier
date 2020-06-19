


<!DOCTYPE html>
<html>
<head>
	<title>This is test</title>
	<?php include "../layout/links.html"; ?>
	<link rel="stylesheet" type="text/css" href="../public/css/createcss/scroll.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
	    	<?php include "../layout/header.php"; ?>
	  
	     	<?php include "../layout/leftsidebar.php"; ?>	
	     	
	     	<div class="col-sm-8 m-auto d-block" style="height: 400px;">
	     		<form action="../oth/login.php" onclick="return login">
	     		<div class="scroll">
	     			<center>
					<h2 style="color: green"> Your registration is succesfully completed. <br> </h2>
					<h4> We sent you your password in your mail.</h4>
					<h4> Please check your mail and login with this password.</h4><br><br><br><br><br><br><br><br><br><br><br>
					<input type="submit" name="LoginPage" value="LoginPage" class="btn btn-success" id="login">
					</center>
				</div>
				</form>
			</div>
			<?php include "../layout/rightsidebar.php"; ?>
	   		<?php include "../layout/footer.php"; ?>
		</div>
	</div>
	<script type="text/javascript">
		function login() {
			window.location ="../oth/login.php"; 
		}
	</script>
</body>
</html>
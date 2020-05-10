<?php
if(session_status() == PHP_SESSION_NONE){
    session_start([
    'cookie_lifetime' => 86400,
	]);
	// var_dump($_SESSION['USERNAME']);
} else {

 //    var_dump(' forot pass :word');
	// var_dump($_SESSION['USERNAME']);
    // var_dump(session_status() == PHP_SESSION_NONE);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>forgot password</title>
	<?php include "layout/links"; ?>
</head>
<body>
	<div class="container">
	<div class="row">
		<?php include "layout/header.php"; ?>
	  
		<?php include "layout/leftsidebar.php"; ?>
		<div class="col-sm-8" style="height: 400px;">
			<br><br>
			<br><br>
			<br><br>
			
			<center>
				<h2>Forgot Password</h2>
				<br><br>
				<form name="myform"  class="box" action="sm_login_code.php" method="POST" id="myform" onsubmit="return validateform()" >
					<div class="form-group">
							<label>Enter Email/Phone Number: </label>
							<input type="text" name="email" class="form-control" id="email" required="">
							<span id="messageemail" style="color: red"></span>
					</div>
					<input type="submit" name="submit" value="submit" class="btn btn-success" onclick="forgot_redirection()">	
				</form>
    		</center>
		</div>
		<?php include "layout/rightsidebar.php"; ?>
	   	<?php include "layout/footer.php"; ?>
	</div>
	</div>
    <script type="text/javascript">
		function validaion(){
			var email = document.getElementById('email').value;
		if (email=="") {
			document.getElementById('message').innerHTML = "** Please enter Email/Phone Number";
				return false;
		}
		function forgot_redirection(){
			window.location = "sm_login.php";
		}	
	</script>
</body>
</html>
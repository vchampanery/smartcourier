<?php 
$pass = "123";
$password  = base64_encode($pass);
echo $password."<br>";

$password  = base64_decode($password);
echo $password."<br>";

$pass = "123";
$password  = base64_encode($pass);
echo $password."<br>";

$password  = base64_decode($password);
echo $password."<br>";


?>


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
	     		<div class="scroll">
				<h1 class="text-succuess text-center"> Regstration Form </h1>
			
				<form action="registrationCode.php" onsubmit="return validaion()" class="bg-light" method="POST">
					<!--<div class="dropdown">
					    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Users Type->
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
						    <li><a href="#">company</a></li>
						    <li><a href="#">user</a></li>
						    <li><a href="#">delivery boy</a></li>
					    </ul>
					</div>-->
					<div class="form-group">
						<label>fname: </label>
						<input type="text" name="fname" class="form-control" id="fname">
						<span id="message" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>lname: </label>
						<input type="text" name="lname" class="form-control" id="lname">
						<span id="messagelname" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>password: </label>
						<input type="password" name="password" class="form-control" id="pass">
						<span id="messagepass" style="color: red"></span>
					</div>
					<div class="form-group">
						<label>confirm-password: </label>
						<input type="password" name="confirm-password" class="form-control" id="conpass">
						<span id="messageconpass" style="color: red"></span>
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
				</div>
			</div>
			<?php include "../layout/rightsidebar.php"; ?>
	   		<?php include "../layout/footer.php"; ?>
		</div>
	</div>
	<script type="text/javascript">
				function validaion(){
					var fname = document.getElementById('fname').value;
					var lname = document.getElementById('lname').value;
					var pass = document.getElementById('pass').value;
					var conpass = document.getElementById('conpass').value;
					var mobile = document.getElementById('mobile').value;
					var email = document.getElementById('email').value;
					var fname_validation_regex= /^[a-z]{1,20}$/;
					/*if (fname=="") {
						document.getElementById('message').innerHTML = "** Please enter fname";
						return false;
					}
					console.dir(fname_validation_regex.test(fname));
					if (fname_validation_regex.test(fname) == false) {
						document.getElementById('message').innerHTML = "** Please enter valid fname ";
						return false;
					}
					
					var lname_validation_regex= /^[a-z]{1,20}$/;
					if (lname=="") {
						document.getElementById('messagelname').innerHTML = "** Please enter lname";
						return false;
					}
					console.dir(lname_validation_regex.test(lname));
					if (lname_validation_regex.test(lname) == false) {
						document.getElementById('messagelname').innerHTML = "** Please enter valid fname ";
						return false;
					}
					var pass_validation_regex= /^([a-zA-z0-9@#$&]{8,15})$/;
					if (pass=="") {
						document.getElementById('messagepass').innerHTML = "** Please enter password";
						return false;
					}
					if (pass_validation_regex.test(pass) == false) {
						document.getElementById('messagepass').innerHTML = "** Please enter password contain a value with special characters,numeric value and alphabets ";
						return false;
					}		
					if (conpass=="") {
						document.getElementById('messageconpass').innerHTML = "** Please enter confirm-password";
						return false;
					}
					var conpass_validation_regex= /^([a-zA-z0-9@#$&]{8,15})$/;
					if (conpass_validation_regex.test(conpass) == false) {
						document.getElementById('messageconpass').innerHTML =  "** Please enter password contain a value with special characters,numeric value and alphabets ";
						return false;
					}
				
					if(pass != conpass){
						document.getElementById('messageconpass').innerHTML =  "** Please enter password ad confirm password same ";
						return false;
					}
					
					var mobile_validation_regex= /^([0-9]{10})$/;
					if (mobile=="") {
						document.getElementById('messagemobile').innerHTML = "** Please enter mobileNumber";
						return false;
					}
					if (mobile_validation_regex.test(mobile) == false) {
						document.getElementById('messagemobile').innerHTML =  "** Please enter valid mobile number ";
						return false;
					}
					//var lname_validation_regex= /^[a-z]{1,20}$/;
					if (email=="") {
						document.getElementById('messageemail').innerHTML = "** Please enter Email";
						return false;
					}*/
				}
			function back_redirection(){
				window.location = "../oth/home.php";
			}	
	</script>
</body>
</html>
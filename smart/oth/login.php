
<?php 


// var_dump($_SESSION['USERNAME']);

require_once '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animated Login Page</title>
	 <?php include "../layout/links.html"; ?>
	<link rel="stylesheet" href="../public/css/createcss/style.css">
	
</head>
<body>
	


	<div class="container">
	  <div class="row">
	     <?php include "../layout/header.php"; ?>
	  
	     	<?php include "../layout/leftsidebar.php"; ?>
	     	<div class="col-sm-8" style="height: 400px;">
	     		<div class="scroll">
	     		<center>
			

					<form name="myform"  class="box" action="../oth/loginCode.php" method="POST" id="myform" onsubmit="return validateform()" >
						<h1>Login</h1>
						<?php if(isset($_REQUEST['error'])){?>
						<span style="color: red">
							<?php echo $_REQUEST['error']."*";?></span>
						<?php } ?>
						<input type="text" name="username" placeholder="username">
						<input type="password" id="password" name="password"  placeholder="password" >
						<span id="message" style="color: red;"></span>
						<!--<a href="javascript:void(0);" id="atag1" onclick="validateform();">Login</a>-->
						<input type="submit" name="" value="Login" onclick="validateform();">
						<!--<input type="submit" name="" value="Back" onclick="back_redirection();">-->
						<a href="../reg/forgotPass.php">forgot password?</a>
					</form>


				</center>
				</div>
	     	</div>
	     	<?php include "../layout/rightsidebar.php"; ?>
	   		<?php include "../layout/footer.php"; ?>
	  </div>
	</div>
<script >
			function validateform() {
				return true;
				
				// alert("test");
				// document.getElementById("#myform").submit();	
				//var form  = document.getElementById("myform");
				//document.getElementById("atag1").addEventListener("click",function(){
				//	form.submit();
				//});
				//return false;
				// var pass = document.getElementById('passwords').value;
				
				
				// if (pass=="") {
				// 	document.getElementById("message").innerHTML="** Please Enter password";
				// 	return false;
				// }
				//  if(pass.length<5){
				// 	document.getElementById("message").innerHTML="** Password have Atleast 5 letter";
				// 	return false;
				// }
				//  if(pass.length>15){
				// 	document.getElementById("message").innerHTML="** Password have max 15 letter";
				// 	return false;
				// }
				// else{
				// 	document.getElementById("message").innerHTML="";
				// }
			}
			function back_redirection(){
				
				window.location = "../oth/home.php";
			}
			//function back_redirection(){
				
			//	window.location = "sm_forgot_pass.php";
			//}
	</script>		

</body>
</html>
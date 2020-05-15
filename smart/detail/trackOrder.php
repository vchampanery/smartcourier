<?php 


// var_dump($_SESSION['USERNAME']);

require_once '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Track Order</title>
	<?php include "../layout/links.html"; ?>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 -->
</head>
<body>
	<div class="container">
	<div class="row">
		<?php include "../layout/header.php"; ?>
	  
		<?php include "../layout/leftsidebar.php"; ?>
		<div class="col-sm-8" style="height: 400px;">
			<br><br>
			<br><br>
			
			<center>
					<h2> Track Order</h2>
				<br>
				<form>
					<label class="radio-inline">
					  <input type="radio" name="optradio" checked>Tracking ID
					</label>
					<label class="radio-inline">
					  <input type="radio" name="optradio">Order ID/Ref ID
					</label><br>
					<input type="text" class="js-search" placeholder="Search....">
					<button type="submit">TRACK</button>
				</form>
			</center>
		</div>
		<?php include "../layout/rightsidebar.php"; ?>
	   	<?php include "../layout/footer.php"; ?>
	</div>
	</div>
    
</body>
</html>
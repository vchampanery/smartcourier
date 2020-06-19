<?php 

  
    // var_dump(' home :word'); 
    // var_dump($_SESSION['USERNAME']);

require_once '../config.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<?php include "../layout/links.html"; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		/*img {
		    -webkit-filter: grayscale(100%);  
		    filter: grayscale(100%);
		}*/
		
	</style>
</head>
<body>
	<div class="container">
	    <div class="row">
	    <?php include "../layout/header.php"; ?>
	  
	     	<?php include "../layout/leftsidebar.php"; ?>
	     	<div class="col-sm-8" style="height: 400px;">
	     		<div class="scroll">
	     <!-- 		<img src="cr_background.jpg" height="560 px" width="500 px"	> -->
	     		<center>
		<!-- 			<h3>Select Your City:-</h3>
	        		<div class="dropdown">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					      City
					    </button>
				    <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Ahmedabad</a>
					    <a class="dropdown-item" href="#">Mehsana</a>
					    <a class="dropdown-item" href="#">Surat</a>
					    <a class="dropdown-item" href="#">Rajkot</a>
					    <a class="dropdown-item" href="#">Vadodara</a>
					    <a class="dropdown-item" href="#">Bhavnagar</a>
					    <a class="dropdown-item" href="#">Jamnagar</a>
					    <a class="dropdown-item" href="#">Junagadh</a>
					    <a class="dropdown-item" href="#">Anand</a>
					    <a class="dropdown-item" href="#">Gandhinagar</a>
					    <a class="dropdown-item" href="#">Kutch</a>
					    <a class="dropdown-item" href="#"></a>
				    </div>
		-->		</center>
		 		</div>
	     	</div>
	     	<?php include "../layout/rightsidebar.php"; ?>
	     	<?php include "../layout/footer.php"; ?>
	    </div>
	</div>
	<center>
		
	</center>
	
</body>
</html>
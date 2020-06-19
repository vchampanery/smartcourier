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
		 			<h3>Select Your City:-</h3>
	        		<label for="city"></label>
	        		<select>
	        			<option value="Ahmedabad"><a href="../city/ahmedabad.php">Ahmedabad</a></option>
	        			<option value="Patan"><a href="../city/ahmedabad.php">Patan</a></option>
	        			<option value="Mehsana"><a href="../city/ahmedabad.php">Mehsana</a></option>
	        			<option value="Surat"><a href="../city/ahmedabad.php">Surat</a></option>
	        		</select><br><br><br><br>
	        		<!-- <img src="https://media.giphy.com/media/QBqTS9XBErS1rEvqyn/source.gif" width="200px" height="200px"> -->
				</center>
		 		</div>
	     	</div>
	     	<?php include "../layout/rightsidebar.php"; ?>
	     	<?php include "../layout/footer.php"; ?>
	    </div>
	</div>
	
</body>
</html>
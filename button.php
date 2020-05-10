<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php if(isset($_SESSION['ERROR'])) { ?>
		<h3> <?php echo $_SESSION['ERROR'];?></h3>
		<?php }?>


		<?php if(isset($_SESSION['USERNAME']) &&  $_SESSION['USERNAME']) { ?>
		<br><h4>Hello, <?php echo $_SESSION['USERNAME'];?></h4>
		<input type="button" value="logout" class="btn btn-info" id="btnHome" onclick="logout_redirection();" ><br>
		<?php } else { ?>	

		<input type="button" value="login" class="btn btn-info" id="btnHome" onclick="login_redirection();" >
		<input type="button" value="registartion" class="btn btn-info" id="btnHome" onclick="registartion_redirection();">
	<?php }?>
	<script type="text/javascript">
		<?php include "layout/public/action.js"; ?>
	</script>
</body>
</html>
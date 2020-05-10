<?php 


require_once 'config.php';
	
	$username = $_REQUEST['username'];
	$password = base64_encode($_REQUEST['password']);
	$query = "select * from user where fname = '".$username."' and password = '".$password."' ";
	$result = $mysqli->query($query);
	if ($mysqli->error) {
		$_SESSION['ERROR'] = $mysqli->error;
	} else{
		unset($_SESSION['ERROR']);
	if($result->num_rows > 0){

			$_SESSION['USERNAME'] = $username;
			var_dump($_SESSION['USERNAME']);
			// die("test");
			header("location: sm_home.php");
			
		} else {
			//die("Test");
			
			$error = "Please verify username and password again";
			echo $error;
			header("location: sm_login.php?error=$error",true,301);	
			//die();	
		}
	}
?>
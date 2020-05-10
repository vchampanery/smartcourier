<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	//$dbname = "smart_cr";

	$mysqli = new mysqli($servername,$username,$password,'smart_cr');
	
	session_start([
'cookie_lifetime' => 86400,
]);
	if ($mysqli->connect_error) {
   	 	die("Connection failed: " . $mysqli->connect_error);
	} else{
		echo "connection successfully";
	}
			
	$url = $_SERVER['REQUEST_URI'];
	
	if(!isset($_SESSION['USERNAME'])  && $url != '/smart/sm_login.php'){
		header("location: sm_login.php");
	}
	


	
?>
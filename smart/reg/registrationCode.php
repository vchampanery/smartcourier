<?php


require "../config.php";

if(isset($_REQUEST['type']) && $_REQUEST['type'] =='edit'){
	$update = "update user set fname = ? where id = ?";
	$fname = isset($_REQUEST['fname'])?$_REQUEST['fname']:null;
	$userid = isset($_REQUEST['userid'])?$_REQUEST['userid']:null;
	$stm = $mysqli->prepare($update);
	$stm->bind_param("ss",$fname,$userid);
	$stm->execute();
	header("location: ../user/user.php",true,301);
} else {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mobile_number = $_POST['mobile_number'];
	$password =base64_encode($_POST['password'])	;
	$email = $_POST['email'];


	$INSERT = "insert into user (fname,password,lname,mobile_number,email) values (?,?,?,?,?)";

	$stm = $mysqli->prepare($INSERT);
	$stm->bind_param("sssss",$fname,$password,$lname,$mobile_number,$email);
	$stm->execute();
	header("location: ../oth/home.php",true,301);	
}


?>
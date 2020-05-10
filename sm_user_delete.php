<?php 

require 'config.php';


$id = $_REQUEST['id'];
$delete = "delete from user where id=".$id;
if ($mysqli->query($delete) === TRUE) {
   header("location: sm_user.php");
} else {
    echo "Error deleting record: " . $mysqli->error;
}


/*
$result = $mysqli->query($delete);
$userListObj = $result -> fetch_all(MYSQLI_ASSOC);
header("location: sm_user.php");*/
?>

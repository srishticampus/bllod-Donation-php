<?php
require 'connection.php';
session_start();
$requestid=$_POST['requestid'];
$donor=$_POST['donor'];
$place=$_POST['place'];
$sql="update request set donor='$donor',donate_place='$place',d_status=3 where id=$requestid";
$result=$con->query($sql);
if(!$result){
	header("location:blood_request_details.php?status=failed");
}
else{
	header("location:blood_request_details.php?status=success");
}
?>
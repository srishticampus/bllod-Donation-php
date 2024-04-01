<?php
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$id=$_GET['id'];
$sql="UPDATE `tutor_registration` SET status='Approved',date='$currentDate',time='$currentTime' WHERE tutor_id='$id'";
$result=$con->query($sql);

if(!$result){
	header("location:view_tutor.php?status=Failed");
}
else{
	header("location:view_tutor.php?status=Success");
}


?>
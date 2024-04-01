<?php
require 'connection.php';
$id=$_GET['id'];
$sql="UPDATE `tutor_registration` SET status='Reject' WHERE tutor_id='$id'";
$result=$con->query($sql);

if(!$result){
	header("location:view_tutor.php?status=Failed");
}
else{
	header("location:view_tutor.php?status=Success");
}


?>
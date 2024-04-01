<?php

require 'connection.php';
session_start();
$id=$_GET['id'];
$stud_id=$_SESSION['stud_id'];
$sql= "INSERT INTO `request`( `stud_id`, `tutor_id`, `status`) VALUES ('$stud_id','$id','Requested')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	
	header("location:trainers.php?status=success");
}
else{
	header("location:trainers.php?status=failed");
}
?>
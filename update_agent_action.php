<?php

require 'connection.php';
session_start();
$id=$_SESSION['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$aadhar=$_POST['aadhar'];
$district=$_POST['district'];
$place=$_POST['place'];
$password=$_POST['password'];
$sql="UPDATE `coordinator` SET `name`='$name',`email`='$email',`phone`='$phone',`aadhar`='$aadhar',`password`='$password',`district`='$district',`place`='$place' WHERE id=$id and status=1";
$result=$con->query($sql);
if(!$result){
	header("location:view_coordinator_profile.php?status=failed");
}
else{
	header("location:view_coordinator_profile.php?status=success");
}


?>
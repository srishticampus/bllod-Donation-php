<?php
require 'connection.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from admin where username='$email' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$_SESSION['user']=true;
	header("location:Admin/index.php?status=success");
}
else{
	header("location:signin.php?status=failed");
}
?>
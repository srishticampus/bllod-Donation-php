<?php
require 'connection.php';
@session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from tutor_registration where email='$user' and password='$pass' and status='Approved'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['tutor_id']=$row['tutor_id'];
	header('location:tutor-login.php?s=success');
}
else{
	header('location:tutor-login.php?s=failed');
}

?>
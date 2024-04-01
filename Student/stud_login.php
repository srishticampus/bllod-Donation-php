<?php
require 'connection.php';
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from student_registration where email='$user' and password='$pass'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['stud_id']=$row['stud_id'];
	header('location:signin.php?s=success');
}
else{
	header('location:signin.php?s=failed');
}

?>
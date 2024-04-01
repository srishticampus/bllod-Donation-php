<?php
session_start();
require 'connection.php';
$user=$_POST['name'];
$pass=$_POST['pass'];
$category=$_POST['category'];
if($category=='agent'){
	$sql="select * from coordinator where email='$user' and password='$pass' and status=1";
	$result=$con->query($sql);
	$count=$result->num_rows;
	if($count>0){
		$row=$result->fetch_assoc();
		$_SESSION['id']=$row['id'];
		echo 1;
	}
	else{
		echo 0;
	}
}
else if($category=='public'){
	$sql="select * from public where email='$user' and password='$pass'";
	$result=$con->query($sql);
	$count=$result->num_rows;
	if($count>0){
		$row=$result->fetch_assoc();
		$_SESSION['id']=$row['id'];
		$_SESSION['email']=$row['email'];

		echo 1;
	}
	else{
		echo 0;
	}
}
?>
<?php
require 'connection.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$aadhar=$_POST['aadhar'];
$district=$_POST['district'];
$place=$_POST['place'];
$password=$_POST['password'];
$sql="INSERT INTO `coordinator`(`name`, `email`, `phone`, `aadhar`, `password`, `district`, `place`,`status`) VALUES ('$name','$email','$phone','$aadhar','$password','$district','$place','Requested')";
$result=$con->query($sql);
$count=$con->affected_rows;
 $last_id = $con->insert_id;
if($count>0){
	 
	
		echo 1;
 
}
else{
	echo 0;
}
?>
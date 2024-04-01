<?php

require 'connection.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$aadhar=$_POST['aadhar'];
$district=$_POST['district'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql="INSERT INTO `public`( `name`, `dob`, `email`, `aadhar`, `phone`, `district`, `address`,`password`,`gender`) VALUES ('$name','$dob','$email','$aadhar','$phone','$district','$address','$password','$gender')";
$result=$con->query($sql);
$count=$con->affected_rows;
 $last_id = $con->insert_id;
if($count>0){
	 // $query="select * from `public` where id=$last_id";
	 // $queryResult=$con->query($query);
	 // $queryCount=$queryResult->num_rows;

	 // if($queryCount>0){
		// $row=$queryResult->fetch_assoc();
		// //($row['status']==1){
		// $_SESSION['email']=$row['email'];
		// $_SESSION['id']=$row['id'];
		echo 1;
	// }
	// else{
	// 	echo 0;
 // }
}
else{
	echo 0;
}
?>
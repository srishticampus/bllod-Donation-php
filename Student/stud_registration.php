<?php
require 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$district=$_POST['district'];
$password=$_POST['password'];
$class=$_POST['class'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$sql="INSERT INTO `student_registration`( `name`, `email`, `phone`, `address`, `district`, `password`,`std`,`gender`,`dob`) VALUES ('$name','$email','$phone','$address','$district','$password','$class','$gender','$dob')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:signup.php?s=success");
}
else{
	header("location:signup.php?s=Failed");
}


?>
<?php
require 'connection.php';

$name=$_POST['first-name'];
$last=$_POST['last-name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$district=$_POST['district'];
$subject=$_POST['subject'];
$password=$_POST['password'];
$amount=$_POST['amount'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);

move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
   $sql="INSERT INTO `tutor_registration`(`firstname`, `lastname`, `email`, `phone`, `address`, `password`, `district`, `subject`, `status`,`amount`,image,gender,dob) VALUES ('$name','$last','$email','$phone','$address','$password','$district','$subject','Pending','$amount','$uploadfile','$gender','$dob')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header('location:tutor-registration.php?s=success');
}
else {
    header('location:tutor-registration.php?s=failed');
}




?>
<?php
require 'connection.php';
@session_start();
$tutor_id=$_SESSION['tutor_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$district=$_POST['district'];
$password=$_POST['password'];
$subject=$_POST['subject'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

$sql="UPDATE `tutor_registration` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`phone`='$phone',`address`='$address',`password`='$password',`district`='$district',`subject`='$subject',`image`='$uploadfile',`dob`='$dob',`gender`='$gender' WHERE tutor_id=$tutor_id";
$result=$con->query($sql);
if(!$result){
	header("location:edit_profile.php?s=failed");
}
else{
	header("location:edit_profile.php?s=success");
}
?>
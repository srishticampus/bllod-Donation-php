<?php
require 'connection.php';
session_start();
$id=$_SESSION['stud_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$std=$_POST['std'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$district=$_POST['district'];
$password=$_POST['password'];
$sql="UPDATE `student_registration` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address',`district`='$district',`password`='$password',`std`='$std' WHERE stud_id=$id";
$result=$con->query($sql);
if(!$result){
	//echo $sql;
	header("location:profile.php?s=failed");

}
else{

	header("location:profile.php?s=success");
}
?>
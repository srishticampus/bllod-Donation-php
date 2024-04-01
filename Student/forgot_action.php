<?php

require 'connection.php';
$email=$_POST['username'];
$pass=$_POST['password'];
$sql="update student_registration set password='$pass' where email='$email'";
$result=$con->query($sql);
if(!$result){
	header("location:forgot_password.php?s=failed");
}
else{
	header("location:forgot_password.php?s=success");
}
?>
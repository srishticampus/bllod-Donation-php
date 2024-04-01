<?php
require 'connection.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from admin where username='$user' and password='$pass'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	header('location:index.php?sucess');
}
else{
	header('location:login.php?failed');
}

?>
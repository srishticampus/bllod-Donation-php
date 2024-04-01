<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="delete from student_registration where stud_id=$id";
$result=$con->query($sql);
if(!$result){
header("location:profile.php?failed");
}
else{
	session_destroy();
		header("location:index.php");
}

?>
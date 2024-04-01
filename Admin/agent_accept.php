<?php
session_start();
require 'connection.php';
$id=$_GET['id'];
$sql="update coordinator set status=1 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:coordinator.php?status=failed");
}
else{
	header("location:coordinator.php?status=success");
}
?>
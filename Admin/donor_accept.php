<?php
session_start();
require 'connection.php';
$id=$_GET['id'];
$sql="update donor set d_status=1 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:donor.php?status=failes");
}
else{
	header("location:donor.php?status=success");
}
?>
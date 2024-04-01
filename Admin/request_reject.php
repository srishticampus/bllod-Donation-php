<?php
session_start();
require 'connection.php';
$id=$_GET['id'];
$sql="update request set r_status=2 where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:request.php?status=failed");
}
else{
	header("location:request.php?status=success");
}
?>
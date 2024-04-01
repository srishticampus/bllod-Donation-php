<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="UPDATE `democlass` SET `demo_status`=2 WHERE id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:send_demo.php?status=failed");
}
else{
	header("location:send_demo.php?status=success");
}
?>
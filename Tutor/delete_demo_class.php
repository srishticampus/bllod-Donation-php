<?php
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];

$id=$_GET['id'];
$sql="delete from `democlass` where id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:send_demo.php?Failed");
}
else{
	header("location:send_demo.php?Success");
}
?>
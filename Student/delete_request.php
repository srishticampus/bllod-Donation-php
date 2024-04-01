<?php

require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="delete from request where request_id='$id'";
$result=$con->query($sql);
if(!$result){
	header("location:trainers.php?status=Failed");
}
else{
	header("location:trainers.php?status=Success");
}


?>
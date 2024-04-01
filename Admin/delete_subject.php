<?php
require 'connection.php';
$id=$_GET['id'];
$sql="delete from subject where sub_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:view_subject.php?failed");
}
else{
	header("location:view_subject.php?Success");
}
?>
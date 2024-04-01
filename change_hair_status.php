<?php

require 'connection.php';
session_start();
$id=$_GET['id'];
$donor=$_GET['donor'];
$date=date('Y-m-d');
$s="select * from request where id=$id";
$r=$con->query($s);
$ro=$r->fetch_assoc();

$donor=$ro['donor'];
if($donor!=null){
$sql="update request set d_status=1 where id=$id";
$result=$con->query($sql);
$sql1="update hair_donor set donor_type='Repeat Donor' where id=$donor ";
$result1=$con->query($sql1);
if(!$result){
	header("location:hair_request_details.php?status=failed");
	//echo $sql;
}
else{
header("location:hair_request_details.php?status=success");
}
}
else{
	header("location:hair_request_details.php?status=failed");
}


?>
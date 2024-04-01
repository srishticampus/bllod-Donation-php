<?php

require 'connection.php';
session_start();
$id=$_SESSION['id'];
$type=$_POST['type'];
$length=$_POST['length'];
$sql="select * from hair_donor where public_id =$id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	echo 2;
}
else{
$sql="INSERT INTO `hair_donor`(`donor_type`, `length`, `public_id`) VALUES ('$type','$length','$id')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	echo 1;

}
else {
	echo 0;
}
}
?>
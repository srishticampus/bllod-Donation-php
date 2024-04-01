<?php
require 'connection.php';
$id=$_GET['id'];
$sql=" DELETE FROM `tutor_registration` WHERE  tutor_id='$id'";
$result=$con->query($sql);
$sql1=" DELETE FROM `request` WHERE  tutor_id='$id'";
$result1=$con->query($sql1);
$sql2=" DELETE FROM `upload_question` WHERE  tutor_id='$id'";
$result2=$con->query($sql2);
$sql3=" DELETE FROM `materials` WHERE  tutor_id='$id'";
$result3=$con->query($sql3);
$sql4=" DELETE FROM `rateing` WHERE  tutor_id='$id'";
$result4=$con->query($sql4);
if(!$result){
	header("location:view_all_tutor.php?status=Failed");
}
else{
	header("location:view_all_tutor.php?status=Success");
}


?>
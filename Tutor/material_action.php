<?php
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];
date_default_timezone_set('Asia/Kolkata');
$uploaddir = 'uploads/';
$subject=$_POST['subject'];
$class=$_POST['class'];
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
$sql="INSERT INTO `materials`( `tutor_id`, `subject`, `std`, `file`, `date`, `time`) VALUES ($tutor_id,'$subject','$class','$uploadfile','$currentDate','$currentTime')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:upload_study_material.php?success");
}
else{
	header("location:upload_study_material.php?Failed");
}
?>
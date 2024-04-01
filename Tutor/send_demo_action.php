<?php
date_default_timezone_set('Asia/Kolkata');
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];

// $request_id=$_POST['request_id'];

$stud_id=$_POST['studname'];

$date=$_POST['date'];
$time1=$_POST['time'];
$tme=strtotime($time1);
 $time=date('h:i a',$tme);

$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$meet=$_POST['meet'];
foreach ($stud_id as $key => $value) {

$s="select * from request where stud_id=$value and tutor_id=$tutor_id";
$r=$con->query($s);
$ro=$r->fetch_assoc();
$request_id=$ro['request_id'];
$sql= "INSERT INTO `democlass`( `stud_id`, `date`, `time`,`current_date`,`current_time`,type,demo_status,meeting,request_id) VALUES ($value,'$date','$time','$currentDate','$currentTime','Demo Class',1,'$meet',$request_id)";
$result=$con->query($sql);
$count=$con->affected_rows;
}
if($count>0){
	header("location:send_demo.php?status=success");
}
else{
	header("location:send_demo.php?status=Failed");
}



?>
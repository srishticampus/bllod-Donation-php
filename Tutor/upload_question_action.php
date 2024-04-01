<?php
date_default_timezone_set('Asia/Kolkata');
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];
$stud_id=$_POST['studname'];
$request_id=$_POST['request_id'];
$date=$_POST['date'];
$time1=$_POST['time'];
$tme=strtotime($time1);
 $time=date('h:i a',$tme);
$end_time1=$_POST['endtime'];
$end=strtotime($end_time1);
$end_time=date('h:i a',$end);
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
$full=$time.'-'.$end_time;
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
$sql="select * from tutor_registration where tutor_id='$tutor_id'";
$result=$con->query($sql);
$row=$result->fetch_assoc();
$subject =$row['subject'];
move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
	foreach ($stud_id as $key => $value) {
		$s="select * from request where stud_id=$value and tutor_id=$tutor_id";
$r=$con->query($s);
$ro=$r->fetch_assoc();
$request_id=$ro['request_id'];
$sql1="INSERT INTO `upload_question`( `date`, `time`, `stud_id`, `tutor_id`, `subject`, `file`,`end_time`,`request_id`) VALUES ('$date','$time',$value,$tutor_id,'$subject','$uploadfile','$end_time','$request_id')";
$result1=$con->query($sql1);
  $last_id = $con->insert_id;
$sql2="INSERT INTO `democlass`( `stud_id`, `date`, `time`, `current_date`, `current_time`, `type`,`request_id`,`ques_id`) VALUES ($value,'$date','$full','$currentDate','$currentTime','Exam','$request_id','$last_id')";
$result2=$con->query($sql2);
}
$count=$con->affected_rows;

if($count>0){
	header('location:online-test-question.php?success');
}
 else {

  header('location:online-test-question.php?failed');
}


?>
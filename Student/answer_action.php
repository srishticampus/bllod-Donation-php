<?php
require 'connection.php';
session_start();
$id=$_SESSION['stud_id'];
$answer=$_POST['answer'];
date_default_timezone_set('Asia/Kolkata');
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['answer']['name']);
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y/m/d');
move_uploaded_file($_FILES['answer']['tmp_name'], $uploadfile);
$sql="update `upload_question` set answer_file='$uploadfile',answerdate='$currentDate',answertime='$currentTime',complete_status=1 where stud_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:events.php?failed");

}
else{
	header("location:events.php?success");
}



?>
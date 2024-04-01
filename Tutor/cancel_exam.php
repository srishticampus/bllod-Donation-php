<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="UPDATE `upload_question` SET `exam_status`=2 WHERE ques_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:online-test-question.php?status=failed");
}
else{
	header("location:online-test-question.php?status=success");
}
?>
<?php
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];

$id=$_GET['id'];
$sql="DELETE upload_question, democlass FROM upload_question INNER JOIN democlass ON upload_question.ques_id = democlass.ques_id WHERE upload_question.ques_id=$id and democlass.type='Exam'";
$result=$con->query($sql);

if(!$result){
	header("location:online-test-question.php?Failed");
}
else{
	header("location:online-test-question.php?Success");
}
?>
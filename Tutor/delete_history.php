<?php
require 'connection.php';
session_start();
$tutor_id=$_SESSION['tutor_id'];

$id=$_GET['id'];
$sql="DELETE upload_question, democlass FROM upload_question inner JOIN democlass ON upload_question.ques_id = democlass.ques_id WHERE upload_question.ques_id=$id and democlass.type='Exam'";
$result=$con->query($sql);

if(!$result){
	header("location:history.php?Failed");
}
else{
	header("location:history.php?Success");
}
?>
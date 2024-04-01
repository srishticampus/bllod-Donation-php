<?php
require 'connection.php';
session_start();
$id=$_POST['id'];
$mark=$_POST['mark'];
$sql="update `upload_question` set mark=$mark where stud_id=$id ";
$result=$con->query($sql);
if(!$result){
	header("location:online-test-question.php?Failed");
}
else{
	header("location:online-test-question.php?Success");
}
?>
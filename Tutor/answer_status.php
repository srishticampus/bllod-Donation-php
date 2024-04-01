<?php
require 'connection.php';
$id=$_GET['id'];
$stus=$_GET['stus'];
if($stus=="1"){
$sql="update `upload_question` set answer_up_status=1 where ques_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:online-test-question.php?failed");
}
else{
	header("location:online-test-question.php?success");
}
}
else{
$sql="update `upload_question` set answer_up_status=0 where ques_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:online-test-question.php?failed");
}
else{
	header("location:online-test-question.php?success");
}	
}

?>
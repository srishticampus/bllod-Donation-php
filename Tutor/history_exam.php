
<?php
require 'connection.php';
session_start();
$id=$_GET['id'];
$sql="update `upload_question` set view_status=1 where ques_id=$id";
$result=$con->query($sql);
if(!$result){
	header("location:online-test-question.php?failed");
}
else{
header("location:online-test-question.php?success");
}

?>
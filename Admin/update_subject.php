<?php
require 'connection.php';
$id=$_POST['id'];
$subject =$_POST['subject'];
$amount=$_POST['amount'];
$description=$_POST['description'];
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
	$sql="Update subject set subject='$subject' , amount='$amount',description='$description',image='$uploadfile' where sub_id=$id";
$result=$con->query($sql);
//$count=$con->affected_rows;
if(!$result){
		header('location:view_subject.php?s=failed');
		//echo $sql;die();
}
else{

	header('location:view_subject.php?s=succ');
}
 
?>
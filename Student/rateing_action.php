<?php
require 'connection.php';
session_start();
$id=$_SESSION['stud_id'];
$rating=$_POST['rating'];
$itemId=$_POST['itemId'];
$title=$_POST['title'];
$comment=$_POST['comment'];
$yes=$_POST['yes'];
$tutor_id=$_POST['tutor_id'];
date_default_timezone_set('Asia/Kolkata');
 $date= date('Y-m-d H:i:s');
 if($yes=='Yes'){
$query="update request set rateing_status='$yes' where tutor_id='$tutor_id' and stud_id='$id'";
$resultquery=$con->query($query);
}
else{
	$del="delete from request where tutor_id='$tutor_id' and stud_id='$id'";
	$delque=$con->query($del);
}

$sql="INSERT INTO `rateing`( `star_count`, `tutor_id`, `stud_id`, `title`, `comment`, `date`,`rateing_status`) VALUES ('$rating','$tutor_id','$id','$title','$comment','$date','$yes')";
$result=$con->query($sql);
$count=$con->affected_rows;

if($count>0){
	header("location:trainers.php?success");
}
else{
	header("location:trainers.php?failed");
}
?>
<?php
require 'connection.php';
session_start();
$id=$_SESSION['id'];
$group=$_POST['group'];
$lastdate=$_POST['lastdate'];
$type=$_POST['type'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];
$uploaddir = 'uploads/';
$date=date('Y-m-d');
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
 $image= basename($_FILES['file']['name']);
$sql="select * from donor where public_id=$id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	header("location:blood_donation.php?status=exist");
}
else{
$sql="INSERT INTO `donor`(`blood`, `last_date`,`public_id`,`type`,`weight`,`gender`,`file`,`updated_at`) VALUES ('$group','$lastdate',$id,'$type','$weight','$gender','$image','$date')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:blood_donation.php?status=success");

}
else {
	header("location:blood_donation.php?status=failed");
}
}
?>
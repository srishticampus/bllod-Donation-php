<?php
require 'connection.php';
session_start();
$group =$_POST['group'];
$date=$_POST['date'];
$address=$_POST['address'];
$uploaddir = 'uploads/';
$public_id=$_SESSION['id'];
$time=date('h:i:s');
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
 $image= basename($_FILES['file']['name']);
$sql="INSERT INTO `request`(`blood`, `date`, `address`,`status`,`file`,`public_id`,`time`) VALUES ('$group','$date','$address','blood','$image','$public_id','$time')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:blood_request.php?status=success");

}
else{
	
	 header("location:blood_request.php?status=failed");
	//echo $sql;die();
}


?>
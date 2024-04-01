<?php
require 'connection.php';
session_start();
$patient =$_POST['patient'];
$details=$_POST['details'];
$gender=$_POST['gender'];
$uploaddir = 'uploads/';
$id=$_SESSION['id'];
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
 $image= basename($_FILES['file']['name']);
$sql="INSERT INTO `request`(`status`,`file`,`gender`,`illness_details`,`is_patient`,`r_status`,`public_id`) VALUES ('hair','$image','$gender','$details','$patient',1,$id)";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header("location:hair_request.php?status=success");

}
else{
	
	 //header("location:hair_request.php?status=failed");
	echo $sql;
}


?>
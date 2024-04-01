<?php
require 'connection.php';
session_start();
$id=$_SESSION['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$phone=$_POST['phone'];
$district=$_POST['district'];
$address=$_POST['address'];
$password=$_POST['password'];
$blood=$_POST['blood'];
$last_date=$_POST['last_date'];
$type=$_POST['type'];
$gender=$_POST['gender'];

$weight=$_POST['weight'];
$donor_type=$_POST['donor_type'];
$length=$_POST['length'];
$uploaddir = 'uploads/';
$sql="UPDATE `public` SET `name`='$name',`dob`='$dob',`email`='$email',`aadhar`='$aadhar',`phone`='$phone',`district`='$district',`address`='$address',`password`='$password' WHERE id=$id";
$result=$con->query($sql);
if(!$result){
	
	header("location:public_profile.php?status=failed");
}
else{

if($_FILES['file']['name']==""){
	$s="select * from donor where public_id=$id";
	$r=$con->query($s);
	$ro=$r->fetch_assoc();
	$image=$ro['file'];
}
else{
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
 $image= basename($_FILES['file']['name']);
}
	$sql1="UPDATE `donor` SET `blood`='$blood',`last_date`='$last_date',`type`='$type',`gender`='$gender',`weight`='$weight',`file`='$image' WHERE public_id=$id";
	$result1=$con->query($sql1);
	$sql2="UPDATE `hair_donor` SET `donor_type`='$donor_type,`length`='$length WHERE public_id=$id";
	$result2=$con->query($sql2);
	header("location:public_profile.php?status=success");
}
?>
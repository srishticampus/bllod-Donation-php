<?php
require 'connection.php';
$subject=$_POST['subject'];
$amount=$_POST['amount'];
$description=$_POST['description'];
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
$sql="INSERT INTO `subject`( `subject`, `amount`, `description`, `image`) VALUES ('$subject','$amount','$description','$uploadfile')";
$result=$con->query($sql);
$count=$con->affected_rows;
if($count>0){
	header('location:add_subject.php?s=success');
}
else{
	header('location:add_subject.php?s=failed');
}
//  else {
//     header('location:add_subject.php?status=failed');
// }




?>


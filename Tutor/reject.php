<?php
require 'connection.php';
$id=$_GET['id'];
$tid=$_GET['tid'];
$sql="UPDATE `request` SET status='Rejected' WHERE stud_id='$id' and tutor_id=$tid";
$result=$con->query($sql);

if(!$result){
	header("location:requested-demo.php?status=Failed");
}
else{
	header("location:requested-demo.php?status=Success");
}


?>
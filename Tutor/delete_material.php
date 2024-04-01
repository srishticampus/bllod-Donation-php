<?php
require 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `materials` where id=$id ";
$result=$con->query($sql);
if(!$result){
	header("location:upload_study_material.php?Failed");
}
else{
	header("location:upload_study_material.php?Success");
}

?>
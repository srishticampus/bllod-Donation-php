<?php
require 'connection.php';
$id=$_GET['id'];
$sql="update request set delete_status=1 where id=$id and d_status!=1";
$result=$con->query($sql);
if(!$result){
	header("location:blood_request_status.php?status=failed");
}
else{
	header("location:blood_request_status.php?status=success");
}

?>
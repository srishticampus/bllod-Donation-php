<?php
require 'connection.php';
$id=$_GET['id'];
$pay=$_GET['pay'];
$que="update request set payment_status='Payment Approved' where request_id='$id'";
$re=$con->query($que);
$que1="update payment set pay_status='Payment Approved' where payment_id='$pay'";
$re1=$con->query($que1);
if(!$re){
	header("location:view_payment.php?Failed");
}
else{
	header("location:view_payment.php?success");
}

?>
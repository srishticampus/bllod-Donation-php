<?php
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
session_start();
$id=$_SESSION['stud_id'];
$name=$_POST['name'];
$reid=$_POST['reid'];
$amount=$_POST['amount'];
$number=$_POST['number'];
$cvc=$_POST['cvc'];
$month=$_POST['month'];
$year=$_POST['year'];
$bank=$_POST['bank'];
$accno=$_POST['accno'];
$ifsc=$_POST['ifsc'];
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y-m-d');
$sql="INSERT INTO `payment`( `pay_name`, `card_no`, `cvc`, `expiration_month`, `amount`, `expiration_year`, `stud_id`, `request_id`,`payment_date`,`payment_time`,`bank`,`account_no`,`ifsc`) VALUES ('$name','$number','$cvc','$month','$amount','$year','$id','$reid','$currentDate','$currentTime','$bank','$accno','$ifsc')";
$result=$con->query($sql);
$count=$con->affected_rows;


$que="update request set payment_status='Paid' where request_id='$reid'";
$re=$con->query($que);
if($count>0){
	header("location:trainers.php?success");

}
else{
	header("location:trainers.php?Failed");
}

?>
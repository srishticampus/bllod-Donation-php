<?php 
require("connection.php");
$emp_id=$_REQUEST["emp_id"];
$pin=$_REQUEST["pin"];
$device_token=$_REQUEST['device_token'];
$sq="update staff_details set device_token='$device_token' where emp_id='$emp_id'";
$re=$con->query($sq);
if($re){
$query="select * from staff_details where emp_id='$emp_id' and pin='$pin'";
$result=$con->query($query);
$count=$result->num_rows;
if($count>0)
{
	$row=$result->fetch_assoc();

$result=$con->query($query);


$status=array("status" => 'Success',"User_data" => $row);
}
else
{
	$status=array("status" => 'Incorrect Password');
}
}

echo json_encode($status);
 ?>
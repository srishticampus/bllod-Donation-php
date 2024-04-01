<?php 
require("connection.php");
$phone=$_REQUEST["phone"];
$password=$_REQUEST["password"];
$device_token =$_REQUEST['device_token'];
$sq="update admin_login set device_token='$device_token' where phone='$phone'";
$re=$con->query($sq);
if($re){

$query="select * from admin_login where password='$password' and phone='$phone'";
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

<?php
require('connection.php');
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$device_token=$_REQUEST['device_token'];

$password=$_REQUEST['password'];

$sql="select * from customer_details where phone='$phone'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
$data=array("status" => "User exist");
}

else
{

$sql1="insert into customer_details(name,email,phone,password,device_token,debit_card,valid_upto,card_name,staff_id) values('$name','$email','$phone','$password','$device_token','','','',0)";

$result1=$con->query($sql1);
$count1=$con->affected_rows;
if($count1>0)
{
$data=array("status" => "success");
}
else
{
	//echo $sql1;
$data=array("status" => "failed");
}

}

echo json_encode($data);

 ?>
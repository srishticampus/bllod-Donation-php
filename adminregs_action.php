
<?php
require('connection.php');
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$shop_name=$_REQUEST['shop_name'];
$building_address=$_REQUEST['building_address'];
$password=$_REQUEST['password'];
$device_token=$_REQUEST['device_token'];

$sql="select * from admin_login where phone='$phone'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
$data=array("status" => "User exist");
}

else
{

$sql1="insert into admin_login(name,email,phone,
shop_name,building_address,password,device_token) values('$name','$email','$phone',
'$shop_name','$building_address','$password','$device_token')";

$result1=$con->query($sql1);
$count1=$con->affected_rows;
if($count1>0)
{
$data=array("status" => "success");
}
else
{
$data=array("status" => "failed");
}

}

echo json_encode($data);

 ?>
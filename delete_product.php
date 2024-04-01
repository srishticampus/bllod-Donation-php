<?php
 require("connection.php");
 
 $product_id=$_REQUEST['product_id'];

 $adminid=$_REQUEST['adminid'];
$sql="select * from add_product where product_id='$product_id'";
$res=$con->query($sql);
$coun=$res->num_rows;
if($coun>0){
	while($ro=$res->fetch_assoc()){
		$id=$ro['product_id'];
	}

  
$query="delete from add_product where product_id='$id'";


$result=$con->query($query);


if($result==true)
{
  

$status=array("status" => 'Deleted Successfully');
}}
else
{
  $status=array("status" => 'Failed');
}


echo json_encode($status);
 ?>
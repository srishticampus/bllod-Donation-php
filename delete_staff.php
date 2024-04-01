<?php
 require("connection.php");
 
 $staff_id=$_REQUEST['staff_id'];

 
$sql="select * from  staff_details where staff_id='$staff_id'";
$res=$con->query($sql);
$coun=$res->num_rows;
if($coun>0){
	while($ro=$res->fetch_assoc()){
		$id=$ro['staff_id'];
	}

  
$query="delete from  staff_details where staff_id='$id'";


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
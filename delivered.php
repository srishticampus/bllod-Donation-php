<?php
 require("connection.php");
 //$post['status']="error";
 $id = $_REQUEST['id'];
 $staff_id = $_REQUEST['staff_id'];
 $customer_id=$_REQUEST['customer_id'];
 
  $result=$con->query("update staff_details set status='Free' where staff_id=$staff_id and id='$id'");
if($result){       



// $sql="delete from order_detail where customer_id='$customer_id' and flag='1'";
	 $sql=$con->query("update order_detail set order_status='delivered' where customer_id=$customer_id and id='$id'");
// $result1=$con->query($sql);


 $sql1=$con->query("update customer_details set staff_id=0 where customer_id=$customer_id");
// $result2=$con->query($sql1);



//if($result1){


$post = array("status"=>"Updated Successfully,Order deleted");
}
//}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
<?php
 require("connection.php");
 $post['status']="error";
 $id = $_REQUEST['id'];
 $staff_id = $_REQUEST['staff_id'];
 $customer_id=$_REQUEST['customer_id'];
 
  $result=$con->query("update staff_details set status='Busy' where staff_id=$staff_id and id='$id'");
    $result1=$con->query("update customer_details set staff_id='$staff_id' where customer_id=$customer_id ");
if($result){       

$post = array("status"=>"Updated Successfully");

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
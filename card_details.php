<?php
require 'connection.php';
 $post['status']="error";
$debit_card=$_REQUEST['debit_card'];
$valid_upto=$_REQUEST['valid_upto'];
$card_holder_name=$_REQUEST['card_holdername'];
$customer_id=$_REQUEST['customer_id'];
$sql="update customer_details set debit_card='$debit_card',valid_upto='$valid_upto',card_name='$card_holder_name' where customer_id=$customer_id";
$result=$con->query($sql);
if($result){       

$post = array("status"=>"Updated Successfully");

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));
?>
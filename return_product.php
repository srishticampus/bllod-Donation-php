<?php
 require("connection.php");
 $post['status']="error";
 $order_id=$_REQUEST['order_id'];
$feedback=$_REQUEST['feedback'];
 
 $sql="select * from order_detail where order_id=$order_id";

$result=$con->query($sql);
$row=$result->fetch_assoc();
$quantity=$row['quantity'];
$product_id=$row['product_id'];
$id=$row['id'];
//echo $quantity;die();


// $sql="delete from order_detail where customer_id='$customer_id' and flag='1'";
	$result1=$con->query("update order_detail set return_flag=1 , feedback='$feedback' , order_status='returned' where order_id=$order_id");
//$result1=$con->query($sql);


 



if($result1){

$result2=$con->query("update add_product set quantity=quantity+'$quantity' where product_id=$product_id");


$admin_query="select * from admin_login where id=$id";
$admin_result=$con->query($admin_query);
$admin_count=$admin_result->num_rows;
if($admin_count>0)
{
    $admin_row=$admin_result->fetch_assoc();
   // $hname = $row["hname"];
    //$date= $row["date"];
    $email=$admin_row["email"];
   

    $from = 'athirasurendran.sics@gmail.com';// this is the sender's Email address
    $to = $email;// this is your Email address
    $subject = "Return Product";
    $subject2 = "Return Product";
    $message = "Product Details\n  \n order ID:".$order_id."";
    $message2 = "Product Details\n  \n order ID:".$order_id."";



    // $message2 = "You have successfully registered in Srishti Innovative Ticket Booking System.Here is your username and password " . $username . "\t and \t" . $password;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
}








$post = array("status"=>"Updated Successfully");
}
 else {
   $post['status']="fail";
    //echo $sql;
}


echo(json_encode($post));

?>
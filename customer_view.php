<?php
 require("connection.php");
 $post['status']="error";
 $custmer_id = $_REQUEST['id'];
 
  $result=$con->query("select * from customer_details where customer_id=$custmer_id");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{

                  $data[] =array(
                        "custmer_id" => $row['customer_id'],
                        "name" => $row['name'],
                        "email" =>$row['email'],
                         "phone" =>$row["phone"],
                        "password" =>$row['password']
                   );      

}        

$post = array("status"=>"Success","Customer_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
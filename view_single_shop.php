<?php
 require("connection.php");
 $post['status']="error";
 $id = $_REQUEST['id'];
 
  $result=$con->query("select * from admin_login where id=$id");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{

                  $data[] =array(
                        "id" => $row['id'],
                        "name" => $row['name'],"email" => $row['email'],
                        "phone" =>$row['phone'],
                        "shop_name" =>$row['shop_name'],
                         "building_address" =>$row["building_address"]
                       
                   );      

}        

$post = array("status"=>"Success","Shop_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
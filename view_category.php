<?php
 require("connection.php");
 $post['status']="error";

 
  $result=$con->query("select * from category ");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{

                  $data[] =array(
                        "category_id" => $row['category_id'],
                        "category_name" => $row['category_name']
                   );      

}        

$post = array("status"=>"Success","Category_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
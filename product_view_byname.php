<?php
 require("connection.php");
 $post['status']="error";
 $id=$_REQUEST['id'];

  $product_name = $_REQUEST['product_name'];
  $product_name = preg_replace("#[^0-9a-z]#i", "", $product_name);
  $result=$con->query("SELECT * from add_product WHERE product_name LIKE 
  '%$product_name%' and id='$id'");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{

                  $data[] =array(
                        "id" => $row['id'],"product_id" => $row['product_id'],
                        "product_name" => $row['product_name'],
                        "quantity" =>$row['quantity'],
                        "brand" =>$row['brand'],
                         "price" =>$row["price"],
                        "rack_no" =>$row['rack_no'],"photo" =>$row['photo'],"category_name"=>$row['category_name']);      

}        

$post = array("status"=>"Success","Product_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
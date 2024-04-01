<?php
 require("connection.php");
 $post['status']="error";
 $adminid=$_REQUEST['adminid'];
  $result=$con->query("select * from add_product where id=$adminid");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
	$p=$row['photo'];
	if($p!=""){
	

$photo= basename($p);
$photo1='http://campus.sicsglobal.co.in/Project/groceryShop/uploads/'.$photo;
}
else{
	$photo1='';
}

                  $data[] =array(
                        "id" => $row['id'],"product_id" => $row['product_id'],
                        "product_name" => $row['product_name'],
                        "quantity" =>$row['quantity'],
                        "brand" =>$row['brand'],
                         "price" =>$row["price"],
                        "rack_no" =>$row['rack_no'],"photo" =>$photo1,"category_name"=>$row['category_name']);      

}        

$post = array("status"=>"Success","Product_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
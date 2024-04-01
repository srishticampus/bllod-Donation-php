<?php
 require("connection.php");
 $post['status']="error";
 $id=$_REQUEST['id'];
 $product_id=$_REQUEST['product_id'];
 $customer_id=$_REQUEST['customer_id'];
//  $result2 =$con->query("select * from customer_details");
//  $count1=$result2->num_rows;
//  if($count1>0){
//  	while($row1=$result2->fetch_assoc())
// {
// 	$custm_id=$row1['customer_id'];
// 	 $data1[] =array(
//                         "customer_id" => $row1['customer_id'],"name" => $row1['name'],
//                         "email" => $row1['email'],
//                         "phone" =>$row1['phone']); 
// }

//  }

// $result1 =$con->query("select * from add_product where id=$id");
// $count2=$result1->num_rows;
//  if($count2>0){
//  	while($row2=$result1->fetch_assoc())
// {
// 	$pro_id=$row2['product_id'];
// 	 $data2[] =array(
//                         "product_id" => $row2['product_id'],"product_name" => $row2['product_name'],
//                         "quantity" => $row2['quantity'],
//                         "brand" =>$row2['brand'],"price"=>$row2['price'],"rack_no"=>$row2['rack_no'],"photo"=>$row2['photo'],"id"=>$row2['id']); 
// }

//  }


  $result=$con->query("select * from order_detail where id=$id and customer_id=$customer_id");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
$proid=$row['product_id'];
                  $data[] =array(
                        "id" => $row['id'],"product_id" => $row['product_id'],
                        "order_id" => $row['order_id'],
                        "quantity" =>$row['quantity']);    





                        $result1 =$con->query("select * from add_product where product_id=$proid");
$count2=$result1->num_rows;
 if($count2>0){
 	while($row2=$result1->fetch_assoc())
{
	//$pro_id=$row2['product_id'];
    $q=$row['quantity'];
    $p=$row2['price'];
    $s=$q*$p;

$ph=$row2['photo'];
    if($ph!=""){
    

$photo= basename($ph);
$photo1='http://campus.sicsglobal.co.in/Project/groceryShop/uploads/'.$photo;
}
else{
    $photo1='';
}
    
	 $data2[] =array(
                        "product_id" => $row2['product_id'],"product_name" => $row2['product_name'],
                        "quantity" => $row['quantity'],
                        "brand" =>$row2['brand'],"price"=>$s,"rack_no"=>$row2['rack_no'],"photo"=>$photo1,"id"=>$row2['id'],"category_name"=>$row2['category_name']); 
}

 }  

}  



 $result2 =$con->query("select * from customer_details where customer_id=$customer_id");
 $count1=$result2->num_rows;
 if($count1>0){
 	while($row1=$result2->fetch_assoc())
{
	$custm_id=$row1['customer_id'];
	 $data1[] =array(
                        "customer_id" => $row1['customer_id'],"name" => $row1['name'],
                        "email" => $row1['email'],
                        "phone" =>$row1['phone']); 
}







 }      

$post = array("status"=>"Success","Order_Details"=>$data,"Product_details"=>$data2,"Customer_details"=>$data1);

}
 else {
    $post['status']="Invalid customer";
}


echo(json_encode($post));

?>
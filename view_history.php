<?php
 require("connection.php");
 $post['status']="fail";
$customer_id=$_REQUEST['customer_id'];

$staff_detail=array();
$order=array();
$shop=array();
$order1=array();
$sql="select * from customer_details where customer_id=$customer_id";
$sqlresult=$con->query($sql);
$sqlcount=$sqlresult->num_rows;
if($sqlcount>0){
$sqlrow=$sqlresult->fetch_assoc();
$staff_id=$sqlrow['staff_id'];





$staff_sql="select * from `staff_details` where staff_id=$staff_id";
$staff_result=$con->query($staff_sql);
$staff_count=$staff_result->num_rows;
if($staff_count>0){
	while($staff_row=$staff_result->fetch_assoc()){
		$ph=$row2['photo'];
    if($ph!=""){
    

$photo= basename($ph);
$photo1='http://campus.sicsglobal.co.in/Project/groceryShop/uploads/'.$photo;
}
else{
    $photo1='';
}
    
		$staff_detail[]=array("staff_id"=>$staff_row['staff_id'],
	                        "name"=>$staff_row['name'],
	                         "photo"=>$photo1,
	                         "emp_id"=>$staff_row['emp_id'],
	                          "phone"=>$staff_row['phone']
	                         );
	}
}
$result=$con->query("SELECT *
FROM order_detail
INNER JOIN admin_login ON order_detail.id=admin_login.id where customer_id=$customer_id");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{


$product_id=$row['product_id'];
$prod_query="select * from add_product where product_id=$product_id";
$prod_result=$con->query($prod_query);
$prod_row=$prod_result->fetch_assoc();
$ph=$prod_row['photo'];
    if($ph!=""){
    

$photo= basename($ph);
$photo1='http://campus.sicsglobal.co.in/Project/groceryShop/uploads/'.$photo;
}
else{
    $photo1='';
}

	              $order[] =array('shopid'=>$row['id'],
	              	               'product_id'=>$row['product_id'],
	              	               'product_name'=>$prod_row['product_name'],
	              	               'image'=>$photo1,
	              	               'price'=>$row['price'],
	              	               'quantity'=>$row['quantity'],
	              	               'order_status'=>$row['order_status'],
	              	                'order_id'=>$row['order_id'],
	              	                'owner_name'=>$row['name'],
	              	                'owner_email'=>$row['email'],
	              	                'owner_phone'=>$row['phone'],
	              	                'shop_name'=>$row['shop_name'],
	              	                 'building_address'=>$row['building_address']

                  
); 
	          }

// $result1=$con->query("SELECT *
// FROM order_detail
// INNER JOIN admin_login ON order_detail.id=admin_login.id where customer_id=$customer_id and  order_status='delivered'");
// $count1=$result1->num_rows;
// if($count1>0)
// {

// while($row1=$result1->fetch_assoc())
// {
// $product_id1=$row1['product_id'];
// $prod_query1="select * from add_product where product_id=$product_id";
// $prod_result1=$con->query($prod_query1);
// $prod_row1=$prod_result1->fetch_assoc();

// 	              $order1[] =array('id'=>$row1['id'],
// 	              	               'product_id'=>$row1['product_id'],
// 	              	               'product_name'=>$prod_row1['product_name'],
// 	              	               'price'=>$row1['price'],
// 	              	               'quantity'=>$row1['quantity'],
// 	              	               'order_status'=>$row1['order_status'],
// 	              	               'order_id'=>$row1['order_id'],
// 	              	                'owner_name'=>$row1['name'],
// 	              	                'owner_email'=>$row1['email'],
// 	              	                'owner_phone'=>$row1['phone'],
// 	              	                'shop_name'=>$row1['shop_name'],
// 	              	                 'building_address'=>$row1['building_address']

                  
// ); 
// 	          }











//   }              

$post = array("status"=>"success","orderDetails"=>$order,"staff"=>$staff_detail);



}
}
 else {
 	//echo $result;
    $post['status']="fail";
}


echo(json_encode($post));

?>
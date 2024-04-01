<?php
 require("connection.php");
 $post['status']="error";
 $id=$_REQUEST['id'];
 
 $customer_id=$_REQUEST['customer_id'];


  $result=$con->query("select * from order_detail where id=$id and customer_id=$customer_id");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
// $proid=$row['product_id'];
//                   $data[] =array(
//                         "id" => $row['id'],"product_id" => $row['product_id'],
//                         "order_id" => $row['order_id'],
//                         "quantity" =>$row['quantity']);    
$product_id=$row['product_id'];
$quantity=$row['quantity'];
$price=$row['price'];
$quantity=$row['quantity'];
$total = $price*$quantity;
$com =$row['customer_id'];

 
$s=array($total);
foreach ($s as $value) {
   $sum += $value;
}



                        $result1 =$con->query("select * from add_product where product_id=$product_id");
$count2=$result1->num_rows;
 if($count2>0){
 	while($row2=$result1->fetch_assoc())
{
	//$pro_id=$row2['product_id'];
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
                        "brand" =>$row2['brand'],"price"=>$total,"rack_no"=>$row2['rack_no'],"photo"=>$photo1,"id"=>$row2['id'],"category_name"=>$row2['category_name']); 





}
}
$sq="select * from customer_details where customer_id ='$com'";
$re=$con->query($sq);
$co=$re->num_rows;
if($co>0){
	while($ro=$re->fetch_assoc()){
		$data1=array(
                        "customer_id" => $ro['customer_id'],"name" => $ro['name'],
                        "email" => $ro['email'],
                        "phone" =>$ro['phone']);;
	}
}

 }      

$post = array("status"=>"Success","Product_details"=>$data2,"Customer_details"=>$data1,"total"=>$sum);

}
 else {
    $post['status']="Invalid customer";
}


echo(json_encode($post));

?>
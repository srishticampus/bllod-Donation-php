<?php 
 $inputJSON = file_get_contents('php://input');
// $request=json_decode($inputJSON);
// $customer_id = $request -> customer_id;
// //$product_details =json_decode( $request -> product_details,true);

// echo $request -> product_details;
require("connection.php");
$status['status']="error";
// $product_id=$_POST["product_id"];
// $brand=$_POST["brand"];
// $id1 =$_POST["id"];
// $product_name=$_POST['product_name'];


// $price =$_POST['price'];
// $rack_no =$_POST['rack_no'];
// $customer_id=$_POST['customer_id'];
// //$product_id=$_REQUEST['product_id'];
// $photo=$_POST['photo'];
// $quantity =$_POST['quantity']; 


$someJSON='[{"product_id":"'.$_POST["product_id"].'","customer_id":"'.$_POST['customer_id'].'","price":"'.$_POST['price'].'","quantity":"'.$_POST['quantity'].'","id":"'.$_POST["id"].'"}]'  ;
$someArray=json_decode($inputJSON,true);
//print_r($someArray);
//for($i=0;$i<count($product_id);$i++){ 
 
foreach($someArray as $row){
    
$sql1="insert into order_detail(id,product_id,customer_id,price,quantity) values ('" . $row["id"] . "', '" . $row["product_id"] . "', '" . $row["customer_id"] . "', '" . $row["price"] . "', '" . $row["quantity"] . "')";

$result1=$con->query($sql1);
$count1=$con->affected_rows;
}
if($count1>0)
{
//$data=array("status" => "success");
	$query="update add_product set quantity=quantity-'$quantity' where product_id='$product_id' and id='$id1'";
 $result2=$con->query($query);

  $result3=$con->query("select * from add_product where id='$id1'");
$count3=$result3->num_rows;
 if($count3>0)
 {

 while($row=$result3->fetch_assoc())
 {

                  $data[] =array(
                        "id" => $row['id'],"product_id" => $row['product_id'],
                       "quantity" =>$row['quantity'],"product_name" => $row['product_name'],"price" =>$row["price"],"brand" => $row['brand'],"rack_no" => $row['rack_no'],"photo"=>$row['photo']
                        
                   );      

} 

$result4=$con->query("select * from order_detail where product_id='$product_id' and id='$id1'");
$count4=$result4->num_rows;
 if($count4>0)
 {

 while($row4=$result4->fetch_assoc())
 {

                  $data1[] =array(
                        "id" => $row4['id'],"product_id" => $row4['product_id'],
                      "quantity" =>$row4['quantity'],
                   "price" =>$row4["price"]);      

} 
}


  }  
$status=array("status" => 'Success',"Order_Details" => $data,"Order" => $data1);



}

else
{
$data=array("status" => "failed");
}



echo json_encode($status);

 
?> 
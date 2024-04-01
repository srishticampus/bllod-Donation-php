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
 //$customer_id=$_POST['customer_id'];
// //$product_id=$_REQUEST['product_id'];
// $photo=$_POST['photo'];
// $quantity =$_POST['quantity']; "customer_id":"'.$_POST['customer_id'].'"

$someJSON='{"data":[{"product_id":"'.$_POST["product_id"].'","quantity":"'.$_POST['quantity'].'","customer_id":"'.$_POST['customer_id'].'","id":"'.$_POST['id'].'"}]}'  ;

$someArray=json_decode($inputJSON,true);
$data =  $someArray["data"]; 


//for($i=0;$i<count($product_id);$i++){ 
 
foreach($data as $row){
 // for($i=0;$i<=count($row["product_id"]);$i++){
    //echo $i;
  
  $query1="select * from add_product where product_id='" . $row["product_id"] . "' and id='" . $row["id"] . "'";
 $result24=$con->query($query1);

 while($row1=$result24->fetch_assoc())
 {
$price = $row1['price'];


//echo($query1);
}


// $sq="select * from customer_details customer_id='" . $row["customer_id"] . "'";
// $rer=$con->query($sq);
// $cou=$rer->num_rows;
// if($cou>0)
//  {
//$cum = $rw['customer_id'];



$sql1="insert into order_detail(id,product_id,customer_id,price,quantity,flag,return_flag,order_status,feedback) values ('" . $row["id"] . "', '" . $row["product_id"] . "','" . $row["customer_id"] . "', '" . $price . "', '" . $row["quantity"] . "',0,0,'processing','')";

$result1=$con->query($sql1);
$count1=$con->affected_rows;
//}


if($count1>0)
{

$query2="select * from order_detail where product_id='" . $row["product_id"] . "' and id='" . $row["id"] . "' and customer_id='" . $row["customer_id"] . "'  ";
 $result2=$con->query($query2);

 while($row2=$result2->fetch_assoc())
 {
$price1 = $row2['price'];
$qua=$row2['quantity'];
$order_id=$row2['order_id'];

}

}
$s="select * from add_product where product_id='".$row["product_id"]."'";
$r=$con->query($s);
$c=$r->num_rows;

  while ($ro=$r->fetch_assoc()) {
    $qu=$ro['quantity'];
  
}
$total=array();
if($qu>0){
//$data=array("status" => "success");
  $query="update add_product set quantity=quantity-'" . $row["quantity"] . "' where product_id='" . $row["product_id"] . "' and id='" . $row["id"] . "'";
 $result2=$con->query($query);


$result4=$con->query("select * from order_detail where product_id='" . $row["product_id"] . "'  and '" . $row["customer_id"] . "' and order_id='".$order_id."'");
$count4=$result4->num_rows;
 
 while($row=$result4->fetch_assoc())
 {
$quantity = $row['quantity'];}

$total= array($price * $qua);
//print_r($total);

  //$total_sum = array_sum($total);
  //echo $total_sum;die();

foreach ($total as $value) {

   $sum += $value;
}

                  // $data[] =array("id" => $row['id'],
                  //       "product_id" => $row['product_id'],
                  //     "quantity" =>$row['quantity'],"customer_id" => $row['customer_id']);      





  
$status=array("status" => 'Success',"price" => $sum);
}
else{
  $status=array("status" => 'Product Out off stoke',"price" => $sum);
}

}


// else
// {
// $status=array("status" => "failed");

// }


echo json_encode($status);

 
?>  
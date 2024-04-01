<?php
require 'connection.php';
// API access key from Google API's Console
define( 'API_ACCESS_KEY','AAAAA1vhOdE:APA91bHKf5F3j4zkRGerkBY3MWH0IyHAZK6DBg-Cn1l1nMxP2HkqEfZ-ZMITUCYxf6if_2w2whTvIvGlFXufoGUE27J1WeDeY2Kbgh9-6DDuK2S17ELlDKLB7xZGZ-dL-p-8bpel8DMF');
/*$device = '
f_W_Vu4-ixs:APA91bF53CjGNALFKIxG6Z1AdE2T35gzAUd2bf2NtOo2OYSmGUDWCanW8t8no00NbufTaSGH7yzTxcK_ossBAfING4MWuNjrcbioTOcOmXc8id2iwqpeYba3glGemWrWU4iBKieFXnxw';
ffzUCH_WjjI:APA91bGxXGhRwTcHMcJCyPbqSn74zSUB9NssKdKzvXw35c3Y_oBq8QF2bkuG5--6JC0MRf0qO2OlP3_isVIAeJp3oDuagHVC9Vo3bHfcdGl1OcWgrOM6Uy9YruujsQbiYxhP2cv5X9Xi
*/
$id=$_REQUEST['id'];
$customer_id=$_REQUEST['customer_id'];
$sql="select * from customer_details where customer_id=$customer_id";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	while ($row=$result->fetch_assoc()) {
		$device=$row['device_token'];
	}
}

//echo $device;
$registrationIds = array($device);

// prep the bundle

//SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
//FROM Orders
//INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
$sql1="select * from order_detail join add_product on order_detail.product_id=add_product.product_id where order_detail.customer_id='$customer_id' and add_product.id=$id";
$result1=$con->query($sql1);
$count1=$result1->num_rows;
if($count1>0){
	$sql="select * from order_detail where id=$id";
	$result=$con->query($sql);
	$count=$result->num_rows;
	if($count>0){
		while($row=$result->fetch_assoc()){
			$qu=$row['quantity'];
			$pr=$row['price'];
			$cust=$row['customer_id'];
			$order_id=$row['order_id'];
		$up="update order_detail set flag='1' where customer_id=$cust and id='$id'";
		$r=$con->query($up);

		$sq="select * from customer_details where customer_id='$cust'";
	$re=$con->query($sq);

	$co=$re->num_rows;
	if($co>0){
	while($r=$re->fetch_assoc()){
		
                        $custom= $r['customer_id'];
                        
                        $name= $r['name'];
                        $email= $r['email'];
                        $phone=$r['phone'];
                        	//$data1=array(
                       // "customer_id" => $r['customer_id'],"name" => $r['name'],
                       // "email" => $r['email'],
                       // "phone" =>$r['phone']);

                        $data1=$r['customer_id'];
                    }

	}

	}
	

	
	while($row1=$result1->fetch_assoc()){
		$product_name=$row1['product_name'];
		$brand=$row1['brand'];
		$rack_no=$row1['rack_no'];
		$photo=$row1['photo'];
		$price=$row1['price'];
		$quan=$row1['quantity'];
		$product_id=$row1['product_id'];
		$msg1[]=array("product_id"=>$product_id,"product_name"=>$product_name,"brand"=>$brand,"rack_no"=>$rack_no,"quantity"=>$qu);


	}
	$total=array($qu*$pr);
	foreach ($total as $value) {
		$sum+=$value;
	}
	//$data=array("Product_details"=>$msg1,"Customer_details"=>$data1);
	}
}


// $msg = array
// (
// 	'message' 	=> 'Customer Order Details',
// 	'Product_details'=>$msg1,
// 	'Customer_details'=>$data1,
// 	'total_price'=>$sum 
	
// );
$msg= array('Price'=>$sum,"Reciever"=>"Customer");
$fields = array
(
	'registration_ids' 	=> $registrationIds,
	'data'			=> $msg
);




 
$headers = array
(
	'Authorization: key=' . API_ACCESS_KEY,
	'Content-Type: application/json'
);
 
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode($fields));
//curl_setopt( $ch,CURLOPT_POSTFIELDS, json_decode( $fields ) );
$result = curl_exec($ch );



curl_close($ch);



 $post = array("payload"=>$msg);

//echo (json_encode($post));
echo $result;
?>

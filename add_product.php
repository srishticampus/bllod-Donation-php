
<?php
require('connection.php');

// header('Content-Type: application/json; charset=utf-8');
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
$upload_dir = 'uploads/';
$server_url = '/home/ubuntu/html/Project/groceryShop';
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];

$quantity=$_POST['quantity'];
$brand=$_POST['brand'];
$price =$_POST['price'];
$rack_no =$_POST['rack_no'];
 $id1 = $_POST['id'];
 $category_name=$_POST['category_name'];

//$query1="select id from admin_login";
//$result1=$con->query($query1);
//$count1=$result1->num_rows;
//if($count1>0)
//{
 // while($row1=$result1->fetch_assoc()){
  //  $id1 = $row1['id'];
  //}
  //}

if($_FILES['avatar'])
{
    $avatar_name = $_FILES["avatar"]["name"];
    $avatar_tmp_name = $_FILES["avatar"]["tmp_name"];
    $error = $_FILES["avatar"]["error"];

    // if($error > 0){
    //     $response = array(
    //         "status" => "error",
    //         "error" => true,
    //         "message" => "Error!"
    //     );
    // }else 
    // {


    $sql="select * from add_product where product_id='$product_id' and id='$id1'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
$response=array("status" => "Product exist");
}

else{
        $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);

if(move_uploaded_file($avatar_tmp_name , $upload_name)) {
        $photo = $server_url."/".$upload_name;}
        else{
           $photo = ""; 
        }



$sql = "insert into add_product(product_name,quantity,brand,
price,rack_no,photo,id,category_name) values('$product_name','$quantity','$brand',
'$price','$rack_no','$photo','$id1','$category_name')";
$result=$con->query($sql);
$count=$con->affected_rows;
    
        if($count>0) {
            

            $response = array(
                "status" => "success",
                "error" => false,
                "message" => "Inserted successfully",
                "url" => $photo
              );


         }
         //else
        // {
        //     $response = array(
        //         "status" => "error",
        //         "error" => true,
        //         "message" => "Error!"
        //     );
        // }
   // }
}


    

}else{
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "No file was sent!"
    );
}

echo json_encode($response);
?>



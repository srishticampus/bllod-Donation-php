
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


$query1="select photo from add_product where product_id='$product_id'";
$result1=$con->query($query1);
$count1=$result1->num_rows;
if($count1>0)
{
 while($row1=$result1->fetch_assoc()){
   $photo1 = $row1['photo'];
  }
  }


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


 


        $random_name = rand(1000,1000000)."-".$avatar_name;
        $upload_name = $upload_dir.strtolower($random_name);
        $upload_name = preg_replace('/\s+/', '-', $upload_name);

if(move_uploaded_file($avatar_tmp_name , $upload_name)) {
        $photo = $server_url."/".$upload_name;}
        else{
            $photo=$photo1;
        }
       


$sql = "UPDATE add_product SET product_name='$product_name',quantity='$quantity',brand='$brand',price ='$price',photo='$photo',rack_no='$rack_no' WHERE product_id='$product_id'";
$result=$con->query($sql);
$count=$con->affected_rows;
    
        if($count>0) {
            

            $response = array(
                "status" => "success");


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



    

else{
    $response = array(
        "status" => "Failed");
}

echo json_encode($response);
?>



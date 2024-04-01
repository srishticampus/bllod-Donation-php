
<?php
require('connection.php');

// header('Content-Type: application/json; charset=utf-8');
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: PUT, GET, POST");
$upload_dir = 'uploads/';
$server_url = '/home/ubuntu/html/Project/groceryShop';
$staff_id=$_POST['staff_id'];
$name=$_POST['name'];

$phone=$_POST['phone'];
$emp_id=$_POST['emp_id'];
$pin =$_POST['pin'];
 $id1 = $_POST['id'];
 $status = $_POST['status'];
 $device_token=$_POST['device_token'];


//$query1="select id from admin_login";
//$result1=$con->query($query1);
//$count1=$result1->num_rows;
//if($count1>0)
//{
 // while($row1=$result1->fetch_assoc()){
  //  $id1 = $row1['id'];
  //}
  //}


$query1="select photo from staff_details where staff_id='$staff_id'";
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


$sql = "UPDATE staff_details SET name='$name',photo='$photo',emp_id='$emp_id',phone='$phone',pin='$pin' WHERE staff_id='$staff_id'";
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



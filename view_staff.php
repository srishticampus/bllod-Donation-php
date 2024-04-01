<?php
 require("connection.php");
 $post['status']="error";
 $id = $_REQUEST['id'];
 $staff_id = $_REQUEST['staff_id'];
 
  $result=$con->query("select * from staff_details where id='$id' and staff_id='$staff_id'");
$count=$result->num_rows;
if($count>0)
{

while($row=$result->fetch_assoc())
{
  $ph=$row['photo'];
    if($ph!=""){
    

$photo= basename($ph);
$photo1='http://campus.sicsglobal.co.in/Project/groceryShop/uploads/'.$photo;
}
else{
    $photo1='';
}

                  $data[] =array(
                        "id" => $row['id'],"staff_id" => $row['staff_id'],
                        "name" => $row['name'],
                        "photo" =>$photo1,
                        "emp_id" =>$row['emp_id'],
                         "phone" =>$row["phone"],
                        "pin" =>$row['pin']
                   );      

}        

$post = array("status"=>"Success","Staff_Details"=>$data);

}
 else {
    $post['status']="fail";
}


echo(json_encode($post));

?>
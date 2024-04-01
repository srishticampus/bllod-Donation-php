<?php 
require("connection.php");

   // $hname = $row["hname"];
    //$date= $row["date"];
    $email='athirasurendran76@gmail.com';
    $password='123';

    $from = 'aarthi.sics@gmail.com';// this is the sender's Email address
    $to = $email;// this is your Email address
    $subject = "Credential Details ";
    $subject2 = "Credential Details";
    $message = "Please find your credential details below:\n  \n Email ID:".$email."\n Password:".$password;
    $message2 = "Credential Details:\n  \n Email ID:".$email."\n Password:".$password;



    // $message2 = "You have successfully registered in Srishti Innovative Ticket Booking System.Here is your username and password " . $username . "\t and \t" . $password;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(mail($to,$subject,$message,$headers)){
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

        //echo $sql;
$status=array("status" => 'Success');
}
else{
  $status=array("status" => 'failed'); 
}

// }
// else
// {
//  $status=array("status" => 'Incorrect Email');
// }

echo json_encode($status);
 ?>
<?php
include 'header.php';
$id=$_SESSION['id'];
?>
<!--End Main Header -->


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>blood request</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>blood request</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Our Story -->


<!-- Promo Video -->
<section class="story">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="box-body table-responsive">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
              <!--   <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Aadhar</th>
                <th>Phone</th>
                <th>District</th> -->
                <th>Requested Address</th>
               
               
                
              
                <th>Requested Blood</th>
                
                <th>Date</th>
                <th>Download file</th>
                <th>Admin Status</th>
                <th>Action</th>
                <th>Status</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <?php
        $i=1;
        $sql="SELECT public.name,public.email,public.dob,public.aadhar,public.phone,public.district,public.address,request.blood,request.address as raddress,request.date,request.id,request.donor,request.file,request.donate_place,request.d_status,request.donor,request.r_status  FROM public
INNER JOIN request ON public.id=request.public_id where request.status='blood' and request.public_id=$id  and request.delete_status=0 order by request.id desc";
$result=$con->query($sql);
while($row=$result->fetch_Assoc()){
    ?>
     <tbody>
            <tr>
                <td><?php echo $i++;?></td>
                <!-- <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['aadhar']?></td>
                <td><?php echo $row['phone'];?></td>
                 <td><?php echo $row['district'];?></td> -->
                  <td><?php echo $row['raddress'];?></td>
                  <td><?php echo $row['blood']?></td>
                  <td><?php echo $row['date'];?></td>
                  <td><a href="uploads/<?php echo $row['file'];?>" target="_blank">Download</a></td>
                  <td><?php
                  if($row['r_status']==0){
                    echo 'Requested';
                  }
                  else if($row['r_status']==1){
                    echo 'Approved';
                  }
                  else{
                    echo 'Rejected';
                  }
                  ?></td>
                  <td>
<?php
if($row['d_status']==0){
  ?>
  Donor Name:<br>
  Donate Place:
  <?php


}
 else{?>

  Donor Name:<?php
   $donor=$row['donor'];

                  $sql2="SELECT public.name,public.id
FROM public
INNER JOIN donor ON public.id=donor.public_id where donor.public_id='$donor'";
                  $result2=$con->query($sql2);
                  $row2=$result2->fetch_assoc();
                  echo $row2['name'];

  ?>
  <br>
  Donate Place:<?php echo $row['donate_place'];?>
  <?php
    
  }?>

                </td>
                  <td><?php 
                $status= $row['d_status'];
                if($status==0){
                  echo 'Requested';
                }else if($status==1){
                  echo 'Completed';
                }
                else{
                  echo 'Assigned';
                }
                  

                  ?></td>
                  <td><button type="button" class="btn btn-danger"><a href="delete_public_request.php?id=<?php echo $row['id']?>" style="color:white;">
                    
Delete</a></button></td>
                  
            </tr>
      
        </tbody>
    <?php

}

        ?>
       
       
    </table>
      </div>
      </div>
    </div>
  </div>
</section>



<!-- Contact Section -->

<!-- End Contact Section -->

<!--footer-main-->
<?php
include 'footer.php';
?>

<script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


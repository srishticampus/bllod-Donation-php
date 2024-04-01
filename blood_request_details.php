<?php
include 'header.php';
$id=$_SESSION['id'];
$s="select * from coordinator where id=$id";
$r=$con->query($s);
$ro=$r->fetch_assoc();
$district=$ro['district'];
$current =date('Y-m-d H:i:s');
$time=date('H:i:s');
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
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Aadhar</th>
                <th>Phone</th>
                <th>District</th>
                <th>Address</th>
               
               
                <th>Requested Place</th>
              
                <th>Requested Blood</th>
                
                <th>Date</th>
                <th>Action</th>
                <th>Status</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <?php
        $i=1;
//         $sql="SELECT public.name,public.email,public.dob,public.aadhar,public.phone,public.district,public.address,request.blood,request.date,request.id,request.donor,request.donate_place,request.d_status,request.donor  FROM public
// INNER JOIN request ON public.id=request.public_id where request.status='blood' and request.r_status=1 order by case 
//     when district LIKE '%$district%' then 1 

//     else 2
//     End";

    $sql="SELECT public.name,public.email,public.dob,public.aadhar,public.phone,public.district,public.address,request.blood,request.address as raddress,request.date,request.id,request.donor,request.donate_place,request.d_status,request.donor  FROM public
INNER JOIN request ON public.id=request.public_id where request.status='blood' and request.r_status=1 order by case 
     when date LIKE '%$current%' then 1
when d_status =0 then 2
    else   3
    End ";
    // echo $sql;
$result=$con->query($sql);
while($row=$result->fetch_Assoc()){
    ?>
     <tbody>
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['dob']?></td>
                <td><?php echo $row['aadhar']?></td>
                <td><?php echo $row['phone'];?></td>
                 <td><?php echo $row['district'];?></td>
                  <td><?php echo $row['address'];?></td>
                   <td><?php echo $row['raddress'];?></td>
                  <td><?php echo $row['blood']?></td>
                  <td><?php echo $row['date'];?></td>
                  <td>
<?php
if($row['d_status']==0){
  $blood=$row['blood'];
                      
  ?>
  <form action="assign_donor.php" method="post">
                    <input type="hidden" name="requestid" value="<?php echo $row['id'];?>">
                    <label>Select Donor</label><br>
                    <select name="donor" class="form-control" style="width: 200px;">
                      <option>Select</option>
                      <?php
                      $blood=$row['blood'];
                      echo $blood;
                  $sql1="SELECT public.name,public.id,donor.d_status
FROM public
INNER JOIN donor ON public.id=donor.public_id where donor.blood='$blood' and donor.d_status=1";
                  $result1=$con->query($sql1);
                  while($row1=$result1->fetch_assoc()){
                    ?>

                    <option value="<?php echo $row1['id'];?>"><?php echo $row1['name'];?></option>
                    <?php
                  }

                  ?>


                    </select>
                    <br>
                    <label>Donate Palce</label>
                    
                    <input type="text" name="place" class="form-control" placeholder="Donate Place">
                    <br>
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">

                  </form>
  <?php


}
 else{?>

  Donor Name:<?php
   $donor=$row['donor'];
 
   
                  $sql2="SELECT public.name,public.id
FROM public
INNER JOIN donor ON public.id=donor.public_id where public.id='$donor' and donor.d_status=1";
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
                  <td><button class="btn btn-primary" ><a href="change_status.php?id=<?php echo $row['id']?>&donor=<?php echo $row['donor'];?>" style="color: #fff">
                    
Completed</a></button></td>
                  
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


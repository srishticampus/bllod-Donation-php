<?php
include 'header.php';

$id=$_SESSION['id'];
$s="select * from coordinator where id=$id";
$r=$con->query($s);
$ro=$r->fetch_assoc();
$district=$ro['district'];
?>
<!--End Main Header -->


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/haird.jpeg);">
    <div class="container">
        <div class="title-text">
            <h1>hair request</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>hair request</li>
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
                <th>Patient</th>
                <th>Illness Details</th>
                <th>Gender
                </th>
                <th>Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>

               
            </tr>
        </thead>
        <?php
        $i=1;
        $sql="SELECT *
FROM public
INNER JOIN request ON public.id=request.public_id where request.status='hair' order by case 
    when district LIKE '%$district%' then 1 

    else 2
    End";
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
                  <td><?php echo $row['is_patient'];?></td>
                  <td><?php echo $row['illness_details']?></td>
                 
                  
                  <td><?php echo $row['gender']?></td>
                  <td><?php echo $row['date'];?></td>
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
                  <td><?php
if($row['d_status']==0){
  ?>
  <form action="assign_hair_donor.php" method="post">
                    <input type="hidden" name="requestid" value="<?php echo $row['id'];?>">
                    <label>Select Donor</label><br>
                    <select name="donor" class="form-control" style="width: 200px;">
                      <option>Select</option>
                      <?php
                      $blood=$row['blood'];
                  $sql1="SELECT public.name,public.id
FROM public
INNER JOIN hair_donor ON public.id=hair_donor.public_id ";
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
                    
                    <input type="text" name="place" class="form-control"  placeholder="Donate Place">
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
INNER JOIN donor ON public.id=donor.public_id where donor.id='$donor'";
                  $result2=$con->query($sql2);
                  $row2=$result2->fetch_assoc();
                  echo $row2['name'];

  ?>
  <br>
  Donate Place:<?php echo $row['donate_place'];?>
  <?php
    
  }?>
</td>
<td><button><a href="change_hair_status.php?id=<?php echo $row['id']?>&donor=<?php echo $row['donor'];?>">
                    
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


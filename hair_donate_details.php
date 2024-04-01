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
            <h1>Hair Donation</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>hair donation</li>
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
                <th>Length</th>
               
                <th>Donor Type</th>
                <th>Gender
                </th>
                
            </tr>
        </thead>
        <?php
        $i=1;
        $sql="SELECT *
FROM public
INNER JOIN hair_donor ON public.id=hair_donor.public_id order by case 
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
                  <td><?php echo $row['address'];?></td>
                  <td><?php echo $row['length']?></td>
                  
                  <td><?php echo $row['donor_type']?></td>
                  <td><?php echo $row['gender']?></td>
                  
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


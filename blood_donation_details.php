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
            <h1>about us</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>about us</li>
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
                <th>Blood</th>
                <th>Last Donate Date</th>
                <th>Type</th>
                <th>Gender
                </th>
                <th>Weight</th>
            </tr>
        </thead>
        <?php
        $i=1;
        $sql="SELECT *
FROM public
INNER JOIN donor ON public.id=donor.public_id where public.id=$id";
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
                  <td><?php echo $row['blood']?></td>
                  <td><?php echo $row['last_date']?></td>
                  <td><?php echo $row['type']?></td>
                  <td><?php echo $row['gender']?></td>
                  <td><?php echo $row['weight']?></td>
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

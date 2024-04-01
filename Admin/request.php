<?php
include 'header.php';
$current =date('Y-m-d H:i:s');
$time=date('H:i:s');
?>
            <!-- Navbar End -->


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                   
                    
                   
                   
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">
                            Request Details</h6>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            

                                               <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
               
                <th scope="col">Aadhar</th>
                <th scope="col">Phone</th>
                <th scope="col">District</th>
                <th scope="col">Address</th>
               
               <th scope="col">Requested For</th>
                
              
             
                
                <th scope="col">Date</th>
                  <th scope="col">Downlaod File</th>
                <th scope="col">Action</th>
                <th scope="col">Coordinator Status</th>
                <th scope="col">Action</th>
                 <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i=1;
                                $sql="SELECT public.name,public.email,public.dob,public.aadhar,public.phone,public.district,public.address,request.blood,request.date,request.id,request.donor,request.donate_place,request.d_status,request.donor,request.file,request.status,request.r_status,request.id  FROM public
INNER JOIN request ON public.id=request.public_id where  request.delete_status=0 order by case 
     when date LIKE '%$current%' then 1
when d_status =0 then 2
    else   3
    End ";
                                $result=$con->query($sql);
                                $count=$result->num_rows;
                                if($count>0){
                                    while ($row=$result->fetch_assoc()) {
                                        ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $i++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
               
                <td><?php echo $row['aadhar']?></td>
                <td><?php echo $row['phone'];?></td>
                 <td><?php echo $row['district'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td><?php echo $row['blood'].' '.$row['status']?></td>
                  <td><?php echo $row['date'];?></td>
                  <td>
                  <a href="../uploads/<?php echo $row['file'];?>" target="_blank">Download</a></td>
                  <td>
<?php
if($row['d_status']==0){
  ?>
  Donor Name:
  Donate Place:
  <?php


}
 else{?>

  Donor Name:<?php
   $donor=$row['donor'];
                  $sql2="SELECT public.name,public.id
FROM public
INNER JOIN donor ON public.id=donor.public_id where public.id='$donor'";
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

                  <td><a href="request_accept.php?id=<?php echo $row['id']?>">
                                                
<?php
if($row['r_status']==1){
   echo 'Accepted';
}
else{
    echo 'Accept';
}

?>


                                            </a>

                             </td>
                             <td>               <a href="request_reject.php?id=<?php echo $row['id']?>">
                                                
<?php
if($row['r_status']==2){
   echo 'Rejected';
}
else{
    echo 'Reject';
}

?>


                                            </a></td>
                                        </tr>
                                        
                                    </tbody>
                                       <?php
                                    }
                                }


                                    ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
       
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
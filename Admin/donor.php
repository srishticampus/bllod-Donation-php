<?php
include 'header.php';
?>
            <!-- Navbar End -->



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                   
                    
                   
                   
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Donor Details</h6>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Blood</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Aadhar</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Last Date</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Weight</th>
                                            <th scope="col">File</th>
                                            
                                             <th scope="col"></th>
                                             <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i=1;
                                $sql="SELECT public.name,public.email,public.phone,donor.blood,public.gender,public.aadhar,public.address,public.district,donor.last_date,donor.type,donor.type,donor.weight,donor.id,donor.file,donor.d_status
FROM public
INNER JOIN donor ON public.id=donor.public_id ";
                                $result=$con->query($sql);
                                $count=$result->num_rows;
                                if($count>0){
                                    while ($row=$result->fetch_assoc()) {
                                        ?>
                                        <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $i++;?></th>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                             <td><?php echo $row['blood'];?></td>
                                             <td><?php echo $row['gender'];?></td>
                                            <td><?php echo $row['aadhar'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['district'];?></td>
                                            <td><?php echo $row['last_date'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['weight'];?></td>
                                            <td><a href="../uploads/<?php echo $row['file'];?>" target="_blank">Download Donor <br>
                                            Medical Information</a></td>
                                            
                                                   <td><a href="donor_accept.php?id=<?php echo $row['id']?>">
                                                
<?php
if($row['d_status']==1){
   echo 'Accepted';
}
else{
    echo 'Accept';
}

?>


                                            </a>

                             </td>
                             <td>               <a href="donor_reject.php?id=<?php echo $row['id']?>">
                                                
<?php
if($row['d_status']==2){
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
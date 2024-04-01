<?php
include 'header.php';

?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Demo class</h4>
                  
                  <div class="table-responsive pt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>STD</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT DISTINCT  student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,payment.pay_status,request.tutor_id,student_registration.std
FROM student_registration
Left JOIN request ON student_registration.stud_id=request.stud_id Left JOIN payment ON payment.request_id=request.request_id where request.tutor_id='$tutor_id'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo $row['name']?></td>
                                                        <td><?php echo $row['email']?></td>
                                                        <td><?php echo $row['phone']?></td>
                                                        <td><?php echo $row['address']?></td>
                                                        <td><?php echo $row['std'];?></td>
                                                        <td><?php echo $row['status']?></td>
                                                        <td><?php if($row['pay_status']==""){
                                                          echo 'Pending';} else{
                                                            echo $row['pay_status'];}?></td>
                                                        <td><a href="approve.php?id=<?php echo $row['stud_id'];?>&tid=<?php echo $row['tutor_id'];?>"><button class="btn btn-primary">
<?php
if($row['status']=="Approved"){
                                                          echo 'Approved';} else{
                                                            echo 'Approve';}?>




                                                        </button></a>
                                                        <?php
if($row['status']=="Approved"){
                                                        } 


                                                        else if($row['status']=="Rejected"){
                                                             echo ' <a href="reject.php?id='.$row['stud_id'].'&tid='.$row['tutor_id'].'"> <button class="btn btn-danger">



                                                             Rejected</button></a>';
                                                           }
                                                             else{
                                                               echo ' <a href="reject.php?id='.$row['stud_id'].'&tid='.$row['tutor_id'].'"> <button class="btn btn-danger">



                                                             Reject</button></a>';
                                                           }



                                                             ?>
                                                         </td>
                                                       
                                                       
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                      </table>
                     
                  </div>
                </div>
              </div>
            </div>
           
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>

</html>

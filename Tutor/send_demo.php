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
                  <a href="#myModal" class="get-started-btn" data-toggle="modal" style="float:right;color: red;font-size: 18px;font-weight: 18px;"><b>Send Class Shcedule</b></a>
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
                            <th>Date</th>
                            <th>Time</th>
                            <th>Payment Status</th>
                            <th>Meeting Details</th>
                            <th>Action</th>
                            <th></th>
                            
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id,democlass.date,democlass.time,democlass.type,democlass.id,democlass.demo_status,student_registration.std,democlass.meeting
FROM student_registration
inner JOIN request ON student_registration.stud_id=request.stud_id inner JOIN democlass ON request.request_id=democlass.request_id where request.tutor_id='$tutor_id' and request.status ='Approved' and request.payment_status='Payment Approved' and democlass.type='Demo Class'";
    $result=$con->query($sql);

    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo $row['name']?></td>
                                                        <td><?php echo $row['email']?></td>
                                                        <td><?php echo $row['phone']?></td>
                                                        <td><?php echo $row['address']?></td>
                                                         <td><?php echo $row['std']?></td>
                                                        <td><?php echo $row['date']?></td>
                                                        <td><?php echo $row['time']?></td>
                                                        <td><?php echo $row['payment_status']?></td>
                                                        <td><?php echo $row['meeting']?></td>
                                                        <td><a class="btn btn-primary" href="cancel_request.php?id=<?php echo $row['id'];?>"><?php

if($row['demo_status']==2){
  echo 'Cancelled';
}
else{
  echo 'Cancel';
}



                                                        ?></a></td>
                                                        <td><a class="btn btn-danger" href="delete_demo_class.php?id=<?php echo $row['id']?>">Delete class</a></td>
                                                        
                                                       
                                                       
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                      </table>
                      <div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="send_demo_action.php" method="post">
        <div class="modal-header">        
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 

        
        <div class="form-group">
          <select class="form-control" multiple="" name="studname[]">
            <option value="">Select Student Name</option>
            <?php
$stud="";
$req="";
$sql1="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id
FROM student_registration
Left JOIN request ON student_registration.stud_id=request.stud_id  where request.tutor_id='$tutor_id' and request.status ='Approved' and request.payment_status='Payment Approved' ";
$result1=$con->query($sql1);
while($row1=$result1->fetch_assoc()){
  $stud=$row1['stud_id'];
  $req=$row1['request_id'];

  echo '<option value="'.$row1['stud_id'].'">'.$row1['name'].'</option>';
}

            ?>

          </select>
        </div>  
        <input type="hidden" name="stud_id" value="<?php echo $stud?>">  
        <input type="hidden" name="request_id" value="<?php echo $req?>">   
          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" required="required" name="date">
          </div>
          <div class="form-group">
            <div class="clearfix">
              <label>Time</label>
             
            </div>
            
            <input type="time" class="form-control" required="required" name="time">
          </div>
          <div class="form-group">
            <label>Meeting Id</label>
            <input type="text" class="form-control" required="required" name="meet" placeholder="eg:...meeting id on skype">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
         
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
                     
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

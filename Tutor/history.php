<?php include 'header.php';?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">History</h4>
                <!--   <a href="#myModal" class="get-started-btn" data-toggle="modal" style="float:right;color: red;font-size: 18px;font-weight: 18px;">Upload Question Paper</a> -->
                  <div class="table-responsive pt-3">
             <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>STD</th>
                            <td>Date</td>
                            <td>Start Time</td>
                            <td>End Time</td>
                            <td>Answer sheet</td>
                           
                            
                            <th>Marks</th>
                            
                            <th></th>
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id,upload_question.date,upload_question.time,upload_question.file,upload_question.end_time,upload_question.ques_id,upload_question.exam_status,upload_question.answer_up_status,student_registration.std,upload_question.answer_file,student_registration.stud_id,upload_question.mark,upload_question.view_status
FROM student_registration
inner JOIN request ON student_registration.stud_id=request.stud_id  inner JOIN `upload_question` ON request.request_id=upload_question.request_id  where request.tutor_id='$tutor_id' and request.status ='Approved' and request.payment_status='Payment Approved' and upload_question.view_status=1";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo $row['name']?></td>
                                                        <td><?php echo $row['email']?></td>
                                                        <td><?php echo $row['phone']?></td>
                                                        <td><?php echo $row['std']?></td>
                                                        <td><?php echo $row['date'];?></td>
                                                        <td><?php echo $row['time'];?></td>
                                                        <td><?php echo $row['end_time']?></td>
                                                        <td><a href="../Student/<?php echo $row['answer_file']?>" download><?php if ($row['answer_file']==""){
                                                          echo '';}else{
                                                            echo 'Download Answershet';
                                                          }?></a></td>
                                          
                                                       
                                                       <td>
                                                         <?php echo $row['mark']?>
                                                        </td>
                                                       
                                                        
                                                       <td><a class="btn btn-danger" href="delete_history.php?id=<?php echo $row['ques_id']?>">Delete </a></td>
                                                       
                                                       
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

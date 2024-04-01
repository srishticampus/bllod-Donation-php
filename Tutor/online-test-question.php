



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
                  <h4 class="card-title">Online test</h4>
                  <a href="#myModal" class="get-started-btn" data-toggle="modal" style="float:right;color: red;font-size: 18px;font-weight: 18px;">Upload Question Paper</a>
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
                            <th>Action</th>
                            <th></th>
                            <th></th>
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id,upload_question.date,upload_question.time,upload_question.file,upload_question.end_time,upload_question.ques_id,upload_question.exam_status,upload_question.answer_up_status,student_registration.std,upload_question.answer_file,student_registration.stud_id,upload_question.mark,upload_question.view_status
FROM student_registration
inner JOIN request ON student_registration.stud_id=request.stud_id  inner JOIN `upload_question` ON request.request_id=upload_question.request_id  where request.tutor_id='$tutor_id' and request.status ='Approved' and request.payment_status='Payment Approved' and upload_question.view_status=0";
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
                                                        <form action="mark_action.php" method="post">
                                                          <input type="hidden" name="id" value="<?php echo $row['stud_id']?>">
                                                          <input type="text" name="mark" placeholder="Mark" size="3" value="<?php echo $row['mark']?>"><br><br>
                                                        <input type="submit" name="submit"value="Submit" class="btn btn-primary" style="color:#fff;font-size: 13px;"></form></td>
                                                        
                                                        <td>
<button class="btn btn-primary"><a href="cancel_exam.php?id=<?php echo $row['ques_id']?>" style="color:#fff;font-size: 13px;">
  <?php
if($row['exam_status']==2){
  echo 'Cancelled';

}
else{
  echo 'Cancel';
}

  ?>



</a></button>
 <?php
if($row['answer_up_status']==0){
  echo '<br>
  <br><button class="btn btn-secondary"><a href="answer_status.php?id='.$row['ques_id'].'&stus=1" style="color:#fff;font-size: 13px;"> Exam Status</a></button>';

}
else if($row['answer_up_status']==1){
 echo '<br><br><button class="btn btn-secondary"><a href="answer_status.php?id='.$row['ques_id'].'&stus=0" style="color:#fff;font-size: 13px;"> Reset  status</a></button>';
}

  ?>
                                                       </td>
                                                       <td><a class="btn btn-danger" href="delete_exam.php?id=<?php echo $row['ques_id']?>" style="font-size: 13px;">Delete </a></td>
                                                       <td><a href="history_exam.php?id=<?php echo $row['ques_id']?>"><i class="fa fa-close" style="font-size:20px;color:red"></i></a></td>
                                                       
                                                       
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                      </table>
                     
                     
                      <div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="upload_question_action.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">   
               
         
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 

          <div class="form-group">
          <select class="form-control" multiple="" name="studname[]">
            <option value="">Select Student Name</option>
            <?php
$stud="";
$req="";
$name="";
$sql1="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id
FROM student_registration
Left JOIN request ON student_registration.stud_id=request.stud_id  where request.tutor_id='$tutor_id' and request.status ='Approved' and request.payment_status='Payment Approved' ";
$result1=$con->query($sql1);
while($row1=$result1->fetch_assoc()){
  $stud=$row1['stud_id'];
  $req=$row1['request_id'];
  $name=$row1['name'];

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
            <div class="clearfix">
              <label>EndTime</label>
             
            </div>
            
            <input type="time" class="form-control" required="required" name="endtime">
          </div>
           <div class="form-group">
            <label>Upload Question Paper</label>
            <input type="file" class="form-control" required="required" name="avatar">
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

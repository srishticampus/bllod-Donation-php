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
<h4 class="card-title">ONLINE TEST</h4>
<a href="#myModal" class="get-started-btn" data-toggle="modal" style="float:right;color: red;font-size: 18px;font-weight: 18px;"><b>Online Test Schedule</b></a>
<div class="table-responsive pt-3">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>#</th>
<th>Student Name</th>
<th>STD</th>
<th>Date</th>
<th>Start Time</th>
<th>End Time</th>
<th>Action</th>



</tr>
</thead>

<tbody>
<?php $i=1;
$sql="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,request.stud_id,request.payment_status,request.status,request.request_id,upload_question.date,upload_question.time,upload_question.file,upload_question.end_time,upload_question.ques_id,upload_question.exam_status,upload_question.answer_up_status,
student_registration.std,upload_question.answer_file,student_registration.stud_id,upload_question.mark,upload_question.view_status
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
<td><?php echo $row['date'];?></td>
<td><?php echo $row['time'];?></td>
<td><?php echo $row['end_time']?></td>
<td><a  href="cancel_onlinetest.php?id=<?php echo $row['ques_id'];?>">

	 <?php
if($row['exam_status']==2){
  echo 'Cancelled';

}
else{
  echo 'Cancel';
}

  ?>
</a>
 <?php
if($row['answer_up_status']==0){
  echo '<a href="answer_status.php?id='.$row['ques_id'].'&stus=1"> Exam Status</a>';

}
else if($row['answer_up_status']==1){
 echo '<a href="answer_status.php?id='.$row['ques_id'].'&stus=0"> Reset Exam status</a>';
}

  ?>
</td>
</tr>
<?php $i++;}
?>
</tbody>
</table>
<div id="myModal" class="modal fade">
<div class="modal-dialog modal-login">
<div class="modal-content">
<form action="upload_question_action.php" method="post" enctype="multipart/form-data">
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
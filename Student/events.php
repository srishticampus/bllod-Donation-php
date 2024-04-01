<?php
include 'header.php';
date_default_timezone_set('Asia/Kolkata');

?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>ONLINE TEST</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <br>
    <br>
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php
$sql= "SELECT tutor_registration.tutor_id,tutor_registration.firstname,tutor_registration.lastname,tutor_registration.subject,tutor_registration.email,tutor_registration.phone,upload_question.date,upload_question.time,upload_question.file,upload_question.end_time,upload_question.answer_up_status,upload_question.exam_status,upload_question.complete_status,upload_question.mark
FROM tutor_registration
Left JOIN `upload_question` ON tutor_registration.tutor_id=upload_question.tutor_id where upload_question.stud_id=$id";
$result=$con->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
$date=$row['date'];
$time=$row['time'];
$currentTime = date( 'h:i a', time() );
$currentDate = date('Y-m-d');
$date1=$date.' '.$time;
$date2=$currentDate.' '.$currentTime;
$end=$row['end_time'];
$date3=$date.' '.$end;
$exam_status=$row['exam_status'];
$complete_status=$row['complete_status'];
$mark=$row['mark'];

$status=$row['answer_up_status'];
if($exam_status==0){
if($date1<=$date2){
?>
 
 <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
           
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $row['subject']?> Exam on <?php echo $row['date'].' , '.$row['time'] ?></a></h5>

                <p class="font-italic text-center">You can download question paper on  <?php echo $row['date'].' , '.$row['time'] ?></p>
                <p>Exam End Time:<?php echo $row['end_time']?> </p>
                <a href="../Tutor/<?php echo $row['file']?>" target="_blank">Download Question paper</a>
             
         <?php  if($status==1 && $complete_status==0){
          ?>
 
          <form action="answer_action.php" method="post" enctype="multipart/form-data">
            <input type="file" id="formId" name="answer">

<input type="hidden" value="<?php echo $date3 ?>" id="date3">
<input type="hidden" value="<?php echo $date2?>" id="date2">


            <input type="submit" name="submit"></form>
             <?php   }
             if($complete_status!=0){
              echo '<br>Answer sheet Submitted Successfully';
             }
             if($mark!=""){
              echo '<br>Your mark :'.$mark;
             }
 

?>

          </div>
            </div>
          </div>
        
       <?php   
 
}

else{?>
  <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
           
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $row['subject']?> Exam on <?php echo $row['date'].' , '.$row['time']?></a></h5>

                <p class="font-italic text-center">You can download question paper on <?php echo $row['date'].' , '.$row['time']?> </p>
                <p>Exam End Time:<?php echo $row['end_time']?></p>
              </div>
            </div>
          </div>
          <?php
        }
}
}

          ?>
          
        
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include 'footer.php';
  ?>

    <script type="text/javascript">
    $(document).ready(function(){


// var date3=$('#date3').val();
// var date2=$('#date2').val();
// var id=$('#formId').val();
// //alert(date3);
// if(date3==date2){
//     setTimeout(function(){
//     alert('ha');
//    $('#formId').hide();
// },60000);
//   }
     });
  </script>

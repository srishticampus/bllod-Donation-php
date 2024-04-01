<?php
include 'header.php';
 ?>
 <style type="text/css">
  .btn-grey1{
   color: grey;
  }
  .btn-warning1{
    
     color: #fcd703;
  }
</style>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>TRAINERS</h2>
       <!--  <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> -->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
<span></span>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
           

           <?php
           if(isset($_SESSION['stud_id'])){
            $amt="";

//$sql="SELECT tutor_registration.stud_id,tutor_registration.firstname,tutor_registration.lastname,tutor_registration.subject,tutor_registration.email,tutor_registration.phone,tutor_registration.amount,request.tutor_id,request.status,tutor_registration.image,request.request_id,request.payment_status,request.rateing_status FROM tutor_registration Left JOIN request ON tutor_registration.stud_id=request.tutor_id left JOIN `student_registration` ON request.stud_id=student_registration.stud_id where tutor_registration.status='Approved'";




$sql="SELECT *
FROM tutor_registration where status='Approved'";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){

  ?>
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
             <img src="../Tutor/<?php echo $row['image'] ?>" class="img-fluid" alt="">
              <div class="member-content" style="width: 300px;">

 
    <?php                                       
$amt=$row['amount'];
//$re_id=$row['request_id'];
?>

 <h4><?php echo $row['firstname'].' '.$row['lastname'];?></h4>
                <span><?php echo $row['subject'];?></span>
                <span><?php echo $row['amount'];?>&#8377;</span>
                <p >
               <?php echo $row['email'];?> <br>  
                 <?php echo $row['phone'];?> 
                </p>
                


                                                
                                           








            
               
                <div class="social">
                <?php
// $tutor_id=$row['tutor_id'];
// $request_id=$row['request_id'];

 $tutor_id= $row['tutor_id'];
$sql1="select * from request where tutor_id=$tutor_id and stud_id=$id";
$result1=$con->query($sql1);
$count1=$result1->num_rows;
if($count1>0){
  $row1=$result1->fetch_assoc();
  $status=$row1['status'];
 $pay=$row1['payment_status'];
 ?>
<!-- <a href="request.php?id='.$row['stud_id'].'" class="get-started-btn"  style="font-size: 12px;color: #fff">Requested</a> -->
 
  <?php
  if($status==''){

echo '<a href="request.php?id='.$row['tutor_id'].'" class="get-started-btn"  style="font-size: 12px;color: #fff">Request</a>';}
if($status=='Requested'){
  echo '<a href="delete_request.php?id='.$row1['request_id'].'" class="get-started-btn" style="font-size: 12px;background-color: red;color: #fff">Delete Request</a>';

}
if($status=='Rejected'){
  echo ''.$row1['status'].'<br><a href="delete_request.php?id='.$row1['request_id'].'" class="get-started-btn" style="font-size: 12px;background-color: red;color: #fff">Delete Request</a>';

}
if($status=='Approved'&&$pay==''){
  echo 'Approved <br><a href="delete_request.php?id='.$row1['request_id'].'" class="get-started-btn" style="font-size: 12px;background-color: red;color: #fff">Delete Request</a>';

}
if($status=='Approved'&&$pay=='Paid'){
  echo ''.$row1['status'].'<br><a href="delete_request.php?id='.$row1['request_id'].'" class="get-started-btn" style="font-size: 12px;background-color: red;color: #fff">Delete Request</a>';

}
if($status=='Approved'&&$pay=='Payment Approved'){
  echo ''.$row1['status'].'<br><a href="delete_request.php?id='.$row1['request_id'].'" class="get-started-btn" style="font-size: 12px;background-color: red;color: #fff">Delete Request</a>';


}
}
else 
{
 echo '<a href="request.php?id='.$row['tutor_id'].'" class="get-started-btn"  style="font-size: 12px;color: #fff">Request</a>'; 
}?>


  

      <!--  echo '<br><br><a href="#myModal3" class="get-started-btn get" data-toggle="modal" data-id="'.$re_id.'"  style="font-size: 12px;color: #fff">Send Payment</a>';  -->       

   
   <?php
  $tutor_id= $row['tutor_id'];
$sql1="select * from request where tutor_id=$tutor_id and stud_id=$id";
$result1=$con->query($sql1);
$count1=$result1->num_rows;
if($count1>0){
  $row1=$result1->fetch_assoc();
  $re_id=$row1['request_id'];
  $status=$row1['status'];
  $pay=$row1['payment_status'];
  if($status=='Approved' && $pay=='' ){
  echo '<br><br><a href="payment.php?request_id='.$re_id.'&stud_id='.$id.'&tutor_id='.$row['tutor_id'].'" class="get-started-btn get"  data-id="'.$re_id.'"  style="font-size: 12px;color: #fff">Send Payment</a>';
}
else if($status=='Approved' && $pay=='Paid' ){
   echo '<br><br><a href="payment.php?request_id='.$re_id.'&stud_id='.$id.'&tutor_id='.$row['tutor_id'].'" class="get-started-btn get"  data-id="'.$re_id.'"  style="font-size: 12px;color: #fff">Send Payment</a>';
   
}
else if($status=='Approved' && $pay=='Payment Approved' ){
   echo '<br><br><a href="payment.php?request_id='.$re_id.'&stud_id='.$id.'&tutor_id='.$row['tutor_id'].'" class="get-started-btn get"  data-id="'.$re_id.'"  style="font-size: 12px;color: #fff">Send Payment</a>';
   echo ' <div class="social">
                  <a href="rating.php?tutor_id='.$row['tutor_id'].'" ><i class="icofont-star"></i>Rating</a>




                  
                </div>';
}
}

   ?>             



               

                </div>
                
              </div>
            </div>
          </div>



          

  <?php
}}else{
  $sql="SELECT *
FROM tutor_registration
 where status='Approved'";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
  ?>
 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../Tutor/<?php echo $row['image'] ?>" class="img-fluid" alt="">
              <div class="member-content" style="width: 300px;">

 
                                           


 <h4><?php echo $row['firstname'].' '.$row['lastname'];?></h4>
                <span><?php echo $row['subject'];?></span>
                <span><?php echo $row['amount'];?>&#8377;</span>
                <p >
                 <?php echo $row['email'];?> <br> 
                 <?php echo $row['phone'];?> 
                </p>
                <p>
                
                 <br>
              
 


               
                </p>
                  <div class="social">
                 <?php
                 $tutor_id=$row['tutor_id'];
               

$sql = "
    SELECT round(avg(`star_count`),2) AS `average_rate`, count(`star_count`) AS `num_of_rating`
    FROM rateing 
    WHERE tutor_id = '$tutor_id' ";
$query = mysqli_query($con,$sql);
$rating = mysqli_fetch_assoc($query);
?>

<div>
    <!-- <h4 style="color: #1478FF; font-size:30px; font-family:  " >    <?php echo $rating['average_rate'];  ?> Avergae rating </h4> -->
     <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-grey1";
                  if($i <= $rating['average_rate']) {
                    $ratingClass = "btn-warning1";
                  }
                ?>
                <a class="btn ">
                  <span class="icofont-star <?php echo $ratingClass; ?>" aria-hidden="true"></span>
                </a>               
                <?php } ?>
</div>
                </div>
  
              </div>


            </div>



          </div>
  <?php
}}
           ?>


          







        

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->





  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>FIND YOUR GUID</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">Trainers</a></li>
              
            </ul>
          </div>

          

        

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>FIND YOUR GUIDE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
         
        </div>
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/jss/main.js"></script>

</body>

</html>

<div id="myModal3" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
      <form  action="payment_action.php"  method="post"><div style="margin:0;padding:0;display:inline">
        <div class="modal-header">        
          <h4 class="modal-title">Payment Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

<input type="hidden" name="reid" id="re_id" value="<?php echo $re_id;?> ">
<input type="hidden" name="amount" value="<?php echo $amt;?> ">
<div class="form-group">
<label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text' name="name">

</div>
<div class="form-group">
  <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text' name="number">
  </div>
<div class="form-group">
  <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvc">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="month">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="year">
              </div>
            </div>
</div>
<div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'><?php echo $amt;?>&#8377;</span>
                </div>
              </div>
            </div>
            <br>

          </div>
        <div class="modal-footer justify-content-between">
           <input class='form-control btn btn-primary submit-button' type='submit' value="Pay »">
         
        
        </div>
      </form>
    </div>
  </div>
</div>  

<script>
    $(document).on("click", ".get", function () {
     var ids = $(this).data('id');
       $(".modal-body #re_id").val( ids );
    });
  </script>
  <!-- ======= Footer ======= -->
 
  
<?php
include 'header.php';
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>public</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>public</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3>Donate<span>Blood</span></h3>
          </div>
          <span id="span">
            <?php
            if (isset($_GET['status'])) {

             if($_GET['status']=='exist'){
              echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Already added</div>';
               echo "<script>setTimeout(function(){
              $(document).ready(function(){
$('.alert-danger').hide();
                }) ;



              }, 3000);</script>";

             }
             else if($_GET['status']=='success'){
              echo '<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details added Successfull</div>';
               echo "<script>setTimeout(function(){
              $(document).ready(function(){
$('.alert-success').hide();
                }) ;



              }, 3000);</script>";
             }
             else{
              echo '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Added Failed</div>';
               echo "<script>setTimeout(function(){
              $(document).ready(function(){
$('.alert-danger').hide();
                }) ;



              }, 3000);</script>";
             }
            }
            ?>


          </span>
          <br>

          <form name="contact_form" class="default-form contact-form" enctype="multipart/form-data" action="donate_blood_action.php" method="post">
            <div class="row">
              <!-- <div class="col-md-12"> -->

               
                  <input type="radio" class="form-control" name="type" id="type" value="First time Donor" style="height: 20px;width: 20px;">&nbsp;&nbsp;<label>First time Donor</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" name="type" id="type" value="Repeat Donor" style="height: 20px;width: 20px">&nbsp;&nbsp;<label>Repeat Donor</label>
              
            <!--   </div> -->
              <div class="col-md-12">
                <div class="form-group">
                  <select class="form-control"  name="group" id="group">
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                   <label>Last Donate Date</label>
                  <input class="form-control" type="date" name="lastdate" id="lastdate" placeholder="Date of Birth" >
                </div>
              </div>
              <div class="col-md-12">
                   <label>Gender</label>
                   </div>
                  <input type="radio" class="form-control" id="gender" name="gender" value="Male" style="height: 20px;width: 20px;">&nbsp;&nbsp;<label>Male</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" id="gender" name="gender" value="Female" style="height: 20px;width: 20px">&nbsp;&nbsp;<label>Female</label>
               
              <div class="col-md-12">
                <div class="form-group">
                  
                  <input class="form-control" type="text" name="weight" id="weight" placeholder="Weight" required="">
                </div>
              </div>
              <div class="col-md-12">
                   <label>Upload Medical Report</label>
                   </div>
                  <input type="file" name="file" class="form-control">
              
                  
                    
                   
                    <br><br>
               
              <div class="col-md-12">
                <!-- <div class="form-group">
                  <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
                </div> -->
                <div class="form-group text-center">
                  <button type="submit" id="blood_id" class="btn-style-one">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
        <div class="appointment-image-holder ml-0 ml-lg-4">
          <figure>
            <img loading="lazy" class="w-100" src="images/background/app.jpg" style="height: 700px;" alt="Appointment">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->

<!--team section-->
<br><br><br>
<!--End team section-->

<!--footer-main-->
<?php
include 'footer.php';
?>
<!-- <script type="text/javascript">
  $(document).ready(function(){
$('#blood_id').click(function(){
  var group= $('#group').val();
  var lastdate=$('#lastdate').val();
  var gender=$('input[name=gender]:checked').val();
  var type=$('input[name=type]:checked').val();
  var weight=$('#weight').val();

  
  $.ajax({
    url:"donate_blood_action.php",
    type:"post",
    data:{group:group,lastdate:lastdate,gender:gender,type:type,weight:weight},
    success:function(data){
      
      if(data==1){
        $('#span').html('<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details added Successfull</div>');
 $('#group').val('');
  $('#lastdate').val('');
 
      }
      else if(data==2){
         $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Already added</div>');

      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Added Failed</div>');
      }

    }

  });

});
  });
</script> -->


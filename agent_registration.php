<?php
include 'header.php';
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>agent</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>agent</li>
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
            <h3>Agent <span>Registration</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="!#" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" id="name" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="aadhar" id="aadhar" placeholder="AAdhar" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="district" id="district" placeholder="District" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="place" id="place" placeholder="Place" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="password" id="password" name="password" placeholder="Password" required="">
                </div>
              </div>
                <!-- <div class="form-group">
                  <select class="form-control" name="subject">
                    <option>Departments</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                  <select class="form-control" name="subject">
                    <option>Doctor</option>
                    <option>Diagnostic</option>
                    <option>Psychological</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-12">
                <!-- <div class="form-group">
                  <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
                </div> -->
                <div class="form-group text-center">
                  <button type="button" id="agent_id" class="btn-style-one">submit now</button>
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

<script type="text/javascript">
  $(document).ready(function(){
$('#agent_id').click(function(){
  var name= $('#name').val();
  var email=$('#email').val();
  var phone=$('#phone').val();
  var aadhar=$('#aadhar').val();
  var district=$('#district').val();
  var place=$('#place').val();
  var password=$('#password').val();
  $.ajax({
    url:"agent_registration_action.php",
    type:"post",
    data:{name:name,email:email,phone:phone,aadhar:aadhar,district:district,place:place,password:password},
    success:function(data){
      if(data==1){
        $('#span').html('<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Registration Successfull</div>');
 $('#name').val('');
  $('#email').val('');
 $('#phone').val('');
 $('#aadhar').val('');
 $('#district').val('');
 $('#place').val('');
  $('#password').val('');
      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Registration Failed</div>');
      }

    }

  });

});
  });
</script>


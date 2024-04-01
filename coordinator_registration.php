<?php
include 'header.php';
?>
<!--End Main Header -->
<style type="text/css">
  span{
    color: red;
  }
</style>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>coordinator</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>coordinator</li>
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
            <h3>Coordinator <span>Registration</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="!#" method="post">
            <div class="row">
              <div class="col-md-12">
                <span id="span1"></span>
                <div class="form-group">
                  <input class="form-control" type="text" name="name" id="name" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-md-12">
                 <span id="span2"></span>
                <div class="form-group">
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email" required="">
                </div>
              </div>
                            <div class="col-md-12">
                               <span id="span3"></span>
                 <div class="form-group">
                  <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" required="">
                </div>
              </div>
                            <div class="col-md-12">
                               <span id="span4"></span>
                 <div class="form-group">
                  <input class="form-control" type="text" name="aadhar" id="aadhar" pattern="^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$" placeholder="Aadhar no(hint: 8907 6775 3454)" required="">
                </div>
              </div>
                            <div class="col-md-12">
                               <span id="span5"></span>
                 <div class="form-group">
                 <!--  <input class="form-control" type="text" name="district" id="district" placeholder="District" required=""> -->
                  <select class="form-control" name="district" id="district" placeholder="District" required="">
                     <option value=""> Select District</option>
              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                <option value="Kollam">Kollam</option>
                  <option value="Alappuzha">Alappuzha</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                      <option value="Kottayam">Kottayam</option>
                        <option value="Idukki">Idukki</option>
                          <option value="Ernakulam"> Ernakulam</option>
                            <option value="Thrissur">Thrissur</option>
                              <option value="Palakkad">Palakkad</option>
                                <option value="Malappuram">Malappuram</option>
                                  <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanadu">Wayanadu</option>
                                      <option value="Kannur">Kannur</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                         
            </select>
                </div>
              </div>
                            <div class="col-md-12">
                               <span id="span6"></span>
                 <div class="form-group">
                  <input class="form-control" type="text" name="place" id="place" placeholder="Place" required="">
                </div>
              </div>
                            <div class="col-md-12">
                               <span id="span7"></span>
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

  if (name=="") {
    $('#span1').html('Enter  Name Field');
  }
  else if(email==""){
    $('#span1').hide();
     $('#span2').html('Enter  Email');

  }else if (phone=="") {
     $('#span1').hide();
     $('#span2').hide();
     $('#span3').html('Enter  Email');
  }
  else if (validateAadhaar(aadhar)==false) {
     $('#span1').hide();
     $('#span2').hide();
     $('#span3').hide();
     $('#span4').html('Enter aadhar no');
  }
    else if (district=="") {
       $('#span1').hide();
     $('#span2').hide();
     $('#span3').hide();
     $('#span4').hide();
      $('#span5').html('Enter district');

    }
      else if (place=="") {
         $('#span1').hide();
     $('#span2').hide();
     $('#span3').hide();
     $('#span4').hide();
      $('#span5').hide();
       $('#span6').html('Enter place');


      }
        else if (password=="") {
           $('#span1').hide();
     $('#span2').hide();
     $('#span3').hide();
     $('#span4').hide();
      $('#span5').hide();
       $('#span6').hide();
        $('#span7').html('Enter password');



        }
else{
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
 $('#span1').hide();
     $('#span2').hide();
     $('#span3').hide();
     $('#span4').hide();
      $('#span5').hide();
       $('#span6').hide();
        $('#span7').hide();
        setInterval(function () {window.location.href="index.php"}, 1000);
      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Registration Failed</div>');
      }

    }

  });
}

});
  });

   function validateAadhaar(aadhar){ 
var regexp = /^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/; 
var ano = aadhar; 

if(regexp.test(ano)) { 
console.log("Valid Aadhaar Number"); 
return true; 
}else{ 
console.log("Invalid Aadhaar Number"); 
 return false; 
} } 
</script>


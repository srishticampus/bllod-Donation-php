<?php
include 'header.php';


?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>Request</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Request</li>
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
            <h3>Request<span>Blood</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="bloodrequest_action.php" enctype="multipart/form-data" method="post">
            <div class="row">
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
                   <label>Date</label>
                  <input class="form-control" type="datetime-local" name="date" id="date" placeholder="Date of Birth" required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                
                  <textarea class="form-control"  name="address" id="address" placeholder="Address" required=""></textarea>
                </div>
              </div>
              
                  
                    
                   
                    
               
              <div class="col-md-12">
                <div class="form-group">
                  <label>Upload Documents</label>
                  <input type="file" class="form-control" name="file" placeholder="Upload Documents" required=""></textarea>
                </div>
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

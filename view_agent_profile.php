<?php
include 'header.php';
$id=$_SESSION['id'];
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>profile</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>profile</li>
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

            <?php
          if(isset($_GET['status']))
          {
            if($_GET['status']=='success'){

              echo "<script>setTimeout(function(){
              $(document).ready(function(){
$('.alert-success').hide();
                }) ;



              }, 3000);</script>";
            echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Updation Successfull
  </div>';
}
else if($_GET['status']=='failed'){
    echo "<script>setTimeout(function(){
              $(document).ready(function(){
$('.alert-danger').hide();
                }) ;



              }, 3000);</script>";
  echo ' <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Failed!</strong> Updation Failed
  </div>';

}
          }
          ?>
          <div class="section-title">
            <h3>Coordinator<span> Profile</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="update_agent_action.php" method="post">
            <?php
            $sql="select * from agent where id=$id";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();
            ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" id="name" value="<?php echo $row['name']?>" placeholder="Name" required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="email" name="email" id="email" value="<?php echo $row['email'];?>" placeholder="Email" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" placeholder="Phone" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" value="<?php echo $row['aadhar'];?>" name="aadhar" id="aadhar" placeholder="AAdhar" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="district" id="district" placeholder="District" value="<?php echo $row['district'];?>" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="place" id="place" value="<?php echo $row['place'];?>" placeholder="Place" required="">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" value="<?php echo $row['password']?>" id="password" name="password" placeholder="Password" required="">
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
                  <button type="submit" id="agent_id" class="btn-style-one">update now</button>
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
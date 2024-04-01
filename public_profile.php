<?php
include 'header.php';
$id=$_SESSION['id'];
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/blood-donation2.gif);">
    <div class="container">
        <div class="title-text">
            <h1>public</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
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
            <h3>Public <span>Profile</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="public_profile_update.php" method="post" enctype="multipart/form-data">
            <?php
$sql="select * from public where id=$id";
$result=$con->query($sql);
$row=$result->fetch_assoc();
            ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $row['name'];?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input class="form-control" type="date" name="dob" id="dob" placeholder="Date of Birth" value="<?php echo $row['dob'];?>" >
                </div>
              </div>
              <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email"  value="<?php echo $row['email'];?>">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="aadhar" id="aadhar" placeholder="AAdhar"  value="<?php echo $row['aadhar'];?>">
                </div>
              </div>
                  <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone"  value="<?php echo $row['phone'];?>">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="district" id="district" placeholder="District"  value="<?php echo $row['district'];?>">
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <textarea class="form-control" type="text" name="address" id="address" placeholder="Address"  style="height: 60px;"><?php echo $row['address'];?></textarea>
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" id="password" name="password" placeholder="Password" value="<?php echo $row['password'];?>" >
                </div>
              </div>
              
              <?php

$sql1="select * from donor where public_id=$id";
$result1=$con->query($sql1);
$count=$result1->num_rows;
if($count>0){
  $row1=$result1->fetch_assoc();
  $d_status=$row1['d_status'];
  ?>
  <label>Blood Donation Details</label>(<?php
if($d_status==0){
  echo 'Admin not approved yet';
}
else if($d_status==1){
  echo 'Admin Approved';
}
else{
  echo 'Admin rejected';
}
  ?>)
 <div class="col-md-12">
                 <div class="form-group">
                  <select class="form-control"  name="blood" id="blood">
                    <option value="">Select Blood Group</option>
                    <option value="A+" <?php if($row1['blood'] == 'A+') echo "selected"; ?>>A+</option>
                    <option value="A-" <?php if($row1['blood'] == 'A-') echo "selected"; ?>>A-</option>
                    <option value="B+" <?php if($row1['blood'] == 'B+') echo "selected"; ?>>B+</option>
                    <option value="B-" <?php if($row1['blood'] == 'B-') echo "selected"; ?>>B-</option>
                    <option value="O+" <?php if($row1['blood'] == 'O+') echo "selected"; ?>>O+</option>
                    <option value="O-" <?php if($row1['blood'] == 'O-') echo "selected"; ?>>O-</option>
                    <option value="AB+" <?php if($row1['blood'] == 'AB+') echo "selected"; ?>>AB+</option>
                    <option value="AB-" <?php if($row1['blood'] == 'AB-') echo "selected"; ?>>AB-</option>
                    <option value="Bombay Blood Group" <?php if($row1['blood'] == 'Bombay Blood Group') echo "selected"; ?>>Bombay Blood Group</option>
                  </select>
                </div>
              </div>
                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="last_date" id="last_date" placeholder="Last Date"  value="<?php echo $row1['last_date'];?>">
                </div>
              </div>
                     
                    <div class="col-md-12">
                   <label>Type</label>
                   </div>
                  <input type="radio" class="form-control" id="type" name="type" value="First time Donor" style="height: 20px;width: 20px;" <?php if($row1['type']=='First time Donor'){?>checked="checked"<?php }?> >&nbsp;&nbsp;<label>First time Donor</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" id="type" name="type" value="Repeat Donor" style="height: 20px;width: 20px" <?php if($row1['type']=='Repeat Donor'){?>checked="checked"<?php }?>>&nbsp;&nbsp;<label>Repeat Donor</label>

                <div class="col-md-12">
                   <label>Gender</label>
                   </div>
                  <input type="radio" class="form-control" id="gender" name="gender" value="Male" style="height: 20px;width: 20px;" <?php if($row1['gender']=='Male'){?>checked="checked"<?php }?> >&nbsp;&nbsp;<label>Male</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" id="gender" name="gender" value="Female" style="height: 20px;width: 20px" <?php if($row1['gender']=='Female'){?>checked="checked"<?php }?>>&nbsp;&nbsp;<label>Female</label>


               
                
                          <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" id="weight" name="weight" placeholder="Weight" value="<?php echo $row1['weight'];?>" >
                </div>
              </div>
                          <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="file" id="file" name="file" placeholder="Medical Documents" >
                </div>
              </div>

  <?php

}

              ?>




              <?php

$sql1="select * from hair_donor where public_id=$id";
$result1=$con->query($sql1);
$count=$result1->num_rows;
if($count>0){
  $row1=$result1->fetch_assoc();
  ?>
   <label>Hair Donation Details</label>




 <div class="col-md-12">
                   <label>Type</label>
                   </div>
                  <input type="radio" class="form-control" id="donor_type" name="donor_type" value="First time Donor" style="height: 20px;width: 20px;" <?php if($row1['donor_type']=='First time Donor'){?>checked="checked"<?php }?> >&nbsp;&nbsp;<label>First time Donor</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" id="donor_type" name="donor_type" value="Repeat Donor" style="height: 20px;width: 20px" <?php if($row1['donor_type']=='Repeat Donor'){?>checked="checked"<?php }?>>&nbsp;&nbsp;<label>Repeat Donor</label>








                            <div class="col-md-12">
                 <div class="form-group">
                  <input class="form-control" type="text" name="length" id="length" placeholder="District"  value="<?php echo $row1['length'];?>">
                </div>
              </div>
                    

  <?php

}

              ?>
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
                  <button type="submit" id="public_id" class="btn-style-one">submit now</button>
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
<?php
require 'header.php';
if(isset($_GET['s'])){
    $s=$_GET['s'];

  
}
?>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>PROFILE</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <br>
    <br>
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        	 <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
           
              <div class="card-body">

              	<input type="hidden" id="success" value="<?php echo $s;?>">
                      <form action="profile_update.php" method="post" >
                        <?php
$sql="select * from student_registration where stud_id='$id'";
$result=$con->query($sql);
$count=$result->num_rows;
$row=$result->fetch_assoc();
                        ?>
                        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" value="<?php echo $row['name']?>" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="inputPassword4" placeholder="Email" value="<?php echo $row['email']?>" name="email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">STD</label>
      <select class="form-control" name="std"><option value=""></option>
             <option <?php if($row['std']=="I") echo 'selected="selected"'; ?>>I</option>
             <option <?php if($row['std']=="II") echo 'selected="selected"'; ?>>II</option>
             <option <?php if($row['std']=="III") echo 'selected="selected"'; ?>>III</option>
             <option <?php if($row['std']=="IV") echo 'selected="selected"'; ?>>IV</option>
             <option <?php if($row['std']=="V") echo 'selected="selected"'; ?>>V</option>
             <option <?php if($row['std']=="VI") echo 'selected="selected"'; ?>>VI</option>
             <option <?php if($row['std']=="VII") echo 'selected="selected"'; ?>>VII</option>
             <option <?php if($row['std']=="VIII") echo 'selected="selected"'; ?>>VIII</option>
             <option <?php if($row['std']=="IX") echo 'selected="selected"'; ?>>IX</option>
             <option <?php if($row['std']=="X") echo 'selected="selected"'; ?>>X</option>
             <option <?php if($row['std']=="XI") echo 'selected="selected"'; ?>>XI</option>
             <option <?php if($row['std']=="XII") echo 'selected="selected"'; ?>>XII</option></select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Phone" value="<?php echo $row['phone']?>" name="phone">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Address" value="<?php echo $row['address']?>" name="address">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">District</label>
      <select class="form-control" id="inputPassword4" placeholder="District"  name="district">
       <option value=""> Select</option>
              <option value="Thiruvananthapuram" <?php if($row['district']=="Thiruvananthapuram") echo 'selected="selected"'; ?>>Thiruvananthapuram</option>
                <option value="Kollam" <?php if($row['district']=="Kollam") echo 'selected="selected"'; ?>>Kollam</option>
                  <option value="Alappuzha" <?php if($row['district']=="Alappuzha") echo 'selected="selected"'; ?>>Alappuzha</option>
                    <option value="Pathanamthitta" <?php if($row['district']=="Pathanamthitta") echo 'selected="selected"'; ?>>Pathanamthitta</option>
                      <option value="Kottayam" <?php if($row['district']=="Kottayam") echo 'selected="selected"'; ?>>Kottayam</option>
                        <option value="Idukki" <?php if($row['district']=="TIdukki") echo 'selected="selected"'; ?>>Idukki</option>
                          <option value="Ernakulam" <?php if($row['district']=="Ernakulam") echo 'selected="selected"'; ?>> Ernakulam</option>
                            <option value="Thrissur" <?php if($row['district']=="Thrissur") echo 'selected="selected"'; ?>>Thrissur</option>
                              <option value="Palakkad" <?php if($row['district']=="Palakkad") echo 'selected="selected"'; ?>>Palakkad</option>
                                <option value="Malappuram" <?php if($row['district']=="Malappuram") echo 'selected="selected"'; ?>>Malappuram</option>
                                  <option value="Kozhikode" <?php if($row['district']=="Kozhikode") echo 'selected="selected"'; ?>>Kozhikode</option>
                                    <option value="Wayanadu" <?php if($row['district']=="Wayanadu") echo 'selected="selected"'; ?>>Wayanadu</option>
                                      <option value="Kannur" <?php if($row['district']=="Kannur") echo 'selected="selected"'; ?>>Kannur</option>
                                        <option value="Kasaragod" <?php if($row['district']=="Kasaragod") echo 'selected="selected"'; ?>>Kasaragod</option>
                                      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Password" value="<?php echo $row['password']?>" name="password">
  </div>
 
  
  <button type="submit" class="btn btn-primary" style="background-color: #140fa3">Update</button>
  
  <button type="button" class="btn btn-danger"><a href="delete_profile.php?id=<?php echo $row['stud_id']?>" style="color:#fff;">Delete</a></button>
</form>
              </div>
          </div>
      </div>
        	</div>
        </div>
    </section>
</main>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script type="text/javascript">
         $(document).ready(function(){
            var id=$('#success').val();
            // alert(id);
            if(id=='success'){
                swal({  title: 'Updated',
                 text: 'Profile Updated Successfully!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'profile.php';  
                    });
                     });
            }
            else if(id=='failed'){
                swal("Profile Updated Failed!");
            }

         });

         
     </script>


<?php
require 'footer.php';
?>
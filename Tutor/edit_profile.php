<?php
include 'header.php';
if(isset($_GET['s'])){
    $s=$_GET['s'];

  
}

?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Profile</h4>
                  
                  <input type="hidden" id="success" value="<?php echo $s;?>">
                      <form action="profile_update.php" method="post" enctype="multipart/form-data">
                      	<?php
$sql="select * from tutor_registration where tutor_id='$tutor_id'";
$result=$con->query($sql);
$count=$result->num_rows;
$row=$result->fetch_assoc();
                      	?>
                      	<img src="<?php echo $row['image']?>" width="200" height="200">
                      	<input type="file" name="file">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" value="<?php echo $row['firstname']?>" name="firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" value="<?php echo $row['lastname']?>" name="lastname">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Gender</label>
      <select class="form-control" id="inputPassword4" placeholder="Gender"  name="gender">
        <option><?php echo $row['gender']?></option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="Dob" value="<?php echo $row['dob']?>" name="dob">
    </div>
  </div>













  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $row['email']?>" name="email">
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
      <input type="text" class="form-control" id="inputPassword4" placeholder="District" value="<?php echo $row['district']?>" name="district">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Password" value="<?php echo $row['password']?>" name="password">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Subject</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Subject" value="<?php echo $row['subject']?>" name="subject">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

      <script type="text/javascript">
         $(document).ready(function(){
            var id=$('#success').val();
            // alert(id);
            if(id=='success'){
                swal({  title: 'Updation',
                 text: 'Updated Successfully!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'edit_profile.php';  
                    });
                     });
            }
            else if(id=='failed'){
                swal("Updated Failed!");
            }

         });

         
     </script>




</body>

</html>

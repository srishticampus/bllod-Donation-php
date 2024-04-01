<?php
require 'connection.php';
// if(isset($_GET['status'])){
//   if($_GET['status']=='failed'){
//     echo 'Account is pending for approvel';
//     $page = $_SERVER['PHP_SELF'];
// $sec = "5";
// header("Refresh: $sec; url=$page");
//   }
// }
if(isset($_GET['s'])){
    $s=$_GET['s'];

  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TutorsCorner</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
  <!-- endinject -->
 <!--  <link rel="shortcut icon" href="../assets/images/favicon.png" /> -->
 <style type="text/css">
  
 .dropbtn {
  background-color: #464dee;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:#464dee;
}
 </style>

</head>

<body>
   
 
 
 
  


  <div class="container-scroller">
  <!--  -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
               <div class="dropdown">
  <button class="dropbtn">TUTOR</button>
  <div class="dropdown-content">
  <a href="../Admin/login.php">ADMIN</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
        <div class="row flex-grow">

          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
             
              <div class="brand-logo">
               
                <h1 style="color:#140fa3;font-weight: bold;">SIGN IN</h1>
              </div>

           
              <input type="hidden" id="success" value="<?php echo $s;?>">
              <form class="pt-3" action="tutor_login_action.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password"  name="password">                        
                  </div>
                </div>
               
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >LOGIN</button>
                </div>
                 <div class="my-3" style="text-align: center; ">
                  <a class=" font-weight-medium auth-form-btn" href="tutor-registration.php" style="">New Registration</a>
                  
                </div>
                 <div class="my-3" style="text-align: center; ">
                  <a class=" font-weight-medium auth-form-btn" href="forgot_password.php" style="">Forgot Password</a>
                </div>
                
               
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end"></p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

      <script type="text/javascript">
         $(document).ready(function(){
            var id=$('#success').val();
            // alert(id);
            if(id=='success'){
                swal({  title: 'Login',
                 text: 'Successfully Login!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'index.php';  
                    });
                     });
            }
            else if(id=='failed'){
                //swal("Account is pending for approvel");
                 swal({  title: 'Warning',
                 text: 'Account is pending for approvel',  
                type: 'warning',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'tutor-login.php';  
                    });
                     });
            }

         });

         
     </script>
</body>

</html>

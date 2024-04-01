<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Tutor</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- endinject -->
 <!--  <link rel="shortcut icon" href="../assets/images/favicon.png" /> -->
</head>
<style type="text/css">
  body{
     background: linear-gradient(to bottom ,#7ee8fa,#eec0c6)
  }
  </style>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
              
                <h1 style="color:blue ;font-weight: bold;">LOGIN</h1>
              </div>
           
              
              <form class="pt-3" action="stud_login.php" method="post">
                <div class="form-group">
                  <label style="color :blue;font-weight:bold;font-size: 20px; "for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Your Email" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label style="color :blue;font-weight:bold;font-size: 20px;  for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password"  name="password">                        
                  </div>
                </div>
               
                <div class="my-3" >
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >LOGIN</button>
                </div>
                 <div class="my-3" style="text-align: center;">
                  <a class=" font-weight-medium auth-form-btn" href="signup.php">Create an account</a>
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
</body>

</html>

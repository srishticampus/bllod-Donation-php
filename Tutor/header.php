<?php
require 'connection.php';
@session_start();
if(isset($_SESSION['tutor_id'])){
$tutor_id=$_SESSION['tutor_id'];
}
else{
  $tutor_id="";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- endinject -->
   <!--  <link rel="shortcut icon" href="../assets/images/favicon.png" /> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

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
  margin-top: 20px;
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
				
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              
              <li class="nav-item dropdown">
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  
                 
                 
                </div>
              </li>
             
             
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
             
                <h1 style="color:#140fa3;font-weight: bold;">
                  
<?php
$sql="select * from tutor_registration where tutor_id=$tutor_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();
echo $row['firstname'].' '.$row['lastname'];
?>


                </h1>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"></span>
                    <span class="online-status"></span>
                    <?php
                    $sql="select * from tutor_registration where tutor_id='$tutor_id'";
                    $result=$con->query($sql);
                    $row=$result->fetch_assoc();
                    echo '<img src="'.$row['image'].'" alt="profile"/>';
                    ?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item" href="edit_profile.php">
                        <i class="mdi mdi-settings text-primary"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="logout.php">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>

                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Class Request</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="send_demo.php">Schedule Class</a></li>
                          <li class="nav-item"><a class="nav-link" href="requested-demo.php">Requested Demo</a></li>
                      </ul>
                  </div>
              </li>
              
             
              <li class="nav-item">
                  <a href="upload_study_material.php" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Upload Material</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Online Test</span>
                    <i class="menu-arrow"></i>
                  </a>





                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="online-test-question.php">Online Test</a></li>
                          <li class="nav-item"><a class="nav-link" href="history.php">History</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="rateing.php" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Rating</span>
                    <i class="menu-arrow"></i>
                  </a>
               <!--    <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div> -->
              </li>
<li class="nav-item">
                       <div class="dropdown">
  <button class="dropbtn">TUTOR</button>
  <div class="dropdown-content">
  <a href="../Admin/login.php">ADMIN</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
</li>


             
            </ul>
     
        </div>
      </nav>
    </div>
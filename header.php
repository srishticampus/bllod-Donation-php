<?php
require 'connection.php';
@session_start();
if(isset($_SESSION['stud_id'])){
$id=$_SESSION['stud_id'];
}
else{
  $id="";
 // header("location:index.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="../assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">

  <!-- Template Main CSS File -->
  <link href="assets/css/sstyle.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
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
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#select{
  color: #140fa3;
  font-weight: bold;
}

  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">TutorsCorner</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- .nav-menu -->
        <!--  <li><a href="pricing.php">Pricing</a></li><li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>   <li><a href="events.php">Events</a></li>-->

<?php
if($id==""){

  echo '<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">HOME</a></li>
          <li><a href="Student/about.php">ABOUT</a></li>
          <li><a href="Student/courses.php">SUBJECTS</a></li>
          <li><a href="Student/trainers.php">TRAINERS</a></li>

        
          
       
          

        </ul>
      </nav>








  <a href="Student/signup.php" class="get-started-btn" >REGISTER</a>
       <a href="Student/signin.php" class="get-started-btn" >LOGIN</a>

 &nbsp;&nbsp;&nbsp;
          <div class="dropdown">
  <span id="select">STUDENT</span>
  <div class="dropdown-content">
 <a href="Admin/login.php">ADMIN</a>
 <br>
 <br>
 <a href="Tutor/tutor-login.php">TUTOR</a>
  </div>
 
 
  
</div>


          
       ';

}else{
  echo '<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">HOME</a></li>
          
          <li><a href="Student/courses.php">SUBJECTS</a></li>
          <li><a href="Student/view_materials.php">MATERIALS</a></li>

          <li><a href="Student/trainers.php">TRAINERS</a></li>
          <li><a href="Student/events.php">ONLINE TEST</a></li>
          <li><a href="Student/email.php">MAIL</a></li>
           <li><a href="Student/payment_history.php">PAYMENT HISTORY</a></li>
           <li><a href="Student/profile.php">PROFILE</a></li>

        </ul>
      </nav>






       <a href="logout.php" class="get-started-btn" >Logout</a> ';
}
?>




    

    </div>
  </header>


<!--   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->



<!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="stud_login.php" method="post">
        <div class="modal-header">        
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">        
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" required="required" name="username">
          </div>
          <div class="form-group">
            <div class="clearfix">
              <label>Password</label>
             
            </div>
            
            <input type="password" class="form-control" required="required" name="password">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
         
          <input type="submit" class="btn btn-primary" value="Login">
        </div>
      </form>
    </div>
  </div>
</div>  




<div id="myModal1" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="stud_registration.php" method="post">
        <div class="modal-header">        
          <h4 class="modal-title">Registration</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">        
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" required="required" name="name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required="required" name="email">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required="required" name="phone">
          </div>
          <div class="form-group">
            <label>Class</label>
           <select name="class" class="form-control" required="">
             <option value=""></option>
             <option>I</option>
             <option>II</option>
             <option>III</option>
             <option>IV</option>
             <option>V</option>
             <option>VI</option>
             <option>VII</option>
             <option>VIII</option>
             <option>IX</option>
             <option>X</option>
             <option>XI</option>
             <option>XII</option>
             
           </select>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea  class="form-control" required="required" name="address"> 
            </textarea>
          </div>
         
          <div class="form-group">
            <label>District</label>
            <select class="form-control" required="required" name="district">
              <option value=""> Select</option>
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
          <div class="form-group">
            <div class="clearfix">
              <label>Password</label>
              
            </div>
            
            <input type="password" class="form-control" required="required" name="password">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <label class="form-check-label">
          <input type="submit" class="btn btn-primary" value="Register">
        </div>
      </form>
    </div>
  </div>
</div>        
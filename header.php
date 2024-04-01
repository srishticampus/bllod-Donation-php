<?php
session_start();
require 'connection.php';

if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
//echo $id;
}
else{



    session_write_close();
       


}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Medic</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="plugins/timePicker/timePicker.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">

  

<!--header top-->
<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="index.php">
            <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
             
            </li>
            <li class="item text-left">
             
            </li>
          </ul>
        
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b53422">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav">
        <li class="nav-item @@home">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about.php">About</a>
        </li>
      <!--   <li class="nav-item @@service">
          <a class="nav-link" href="service.php">Service</a>
        </li> -->
       



  





       
       



        <li class="nav-item dropdown @@blogs">
          <?php
            if(!isset($_SESSION['id'])&&!isset($_SESSION['email'])){
              ?>
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item @@blog" href="coordinator_registration.php">Coordinator</a></li>
            <li><a class="dropdown-item @@blogDetails" href="public_registration.php">Public</a></li>

           
          </ul>

 <?php
        }
        else if(!isset($_SESSION['email'])&&isset($_SESSION['id'])){
          ?>
  <li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Request</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="blood_donate_details.php">Donate blood</a></li>
            <li><a class="dropdown-item @@blogDetails" href="blood_request_details.php">Blood Request</a></li>
            <li><a class="dropdown-item @@blog" href="hair_donate_details.php">Donate Hair</a></li>
            <li><a class="dropdown-item @@blogDetails" href="hair_request_details.php">Hair Request</a></li>
           
          </ul>
        </li>


        
<li class="nav-item @@service">
          <a class="nav-link" href="view_coordinator_profile.php">Profile</a>
        </li>



          <?php
        }
        else if(isset($_SESSION['email'])){
          ?>
 <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Request For</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item @@blog" href="blood_donation.php">Donate Blood</a></li>
            <li><a class="dropdown-item @@blogDetails" href="blood_request.php">Blood</a></li>
            <li><a class="dropdown-item @@blog" href="hair_donate.php">Donate Hair</a></li>
            <li><a class="dropdown-item @@blogDetails" href="hair_request.php">Hair</a></li>

           
          </ul>

          <li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Request</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           <!-- <li><a class="dropdown-item @@blogDetails" href="blood_donation_details.php">Blood Donation Details</a></li> -->
            <li><a class="dropdown-item @@blogDetails" href="blood_request_status.php">Blood Request</a></li>
           <!--  <li><a class="dropdown-item @@blogDetails" href="hair_donation_details.php">Hair Donation Details</a></li> -->
           
            <li><a class="dropdown-item @@blogDetails" href="hair_request_status.php">Hair Request</a></li>
           
          </ul>
        </li>
           <li class="nav-item @@service">
          <a class="nav-link" href="public_profile.php">Profile</a>
        </li>



          <?php
        }

          ?>
           <li class="nav-item @@appointment">
            <?php
            if(isset($_SESSION['id'])){
              echo'<a class="nav-link" href="logout.php">Logout</a>';
            }
            else if(!isset($_SESSION['id'])&&!isset($_SESSION['email'])){
 echo'<a class="nav-link" href="login.php">Login</a>';
              
            }
            ?>
         

        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
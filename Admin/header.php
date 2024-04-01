
<?php
require 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorsCorner</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/dripicons/webfont.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
   
    
</head>

<body>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php">ADMIN</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                    <!--     <li class="sidebar-title"><a href="email.php" class='sidebar-link'> <i class="bi bi-envelope-fill"></i><span>Email</span></a></li> -->

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                       

                        <li class="sidebar-item  has-sub">
                            <a href="add_subject.php" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Subject</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="add_subject.php">Add Subject</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="view_subject.php">View Subject</a>
                                </li>
                            
                            </ul>
                        </li>





 <li class="sidebar-item  has-sub">
                            <a href="View Tutor" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Tutors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="view_tutor.php">View Tutor</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="view_all_tutor.php">View all Tutor</a>
                                </li>
                            
                            </ul>
                        </li>


                        <li class="sidebar-item  has-sub">
                            <a href="view_allStudent.php" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Students</span>
                            </a>
                            <ul class="submenu ">
                               <!--  <li class="submenu-item ">
                                    <a href="view_Student.php">View Student</a>
                                </li> -->
                                <li class="submenu-item ">
                                    <a href="view_allStudent.php">View  all Student</a>
                                </li>
                                 <li class="submenu-item ">
                                    <a href="view_exam_status.php">View  Mark</a>
                                </li>
                            
                            </ul>
                        </li>
                        
<li class="sidebar-item  has-sub">
                            <a href="view_payment.php" class='sidebar-link'>
                                <i class="icon dripicons-monitor"></i>
                                <span>Payment</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="view_payment.php">View Payment</a>
                                </li>
                               
                            
                            </ul>
                        </li>
                       

                        

                        

                       

                        <li class="sidebar-item  ">
                            <a href="rateing.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Rating</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="email.php" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email</span>
                            </a>
                        </li>
                        <br>
                          <a href="login.php"> Sign Out </a>
                          <br>
                     

                       

                        


                      


                        

                       

                        

                       

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
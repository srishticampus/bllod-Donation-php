<?php
include 'header.php';

?>
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

        <div id="main">
            <div class="dropdown">
  <button class="dropbtn">TUTOR</button>
  <div class="dropdown-content">
  <a href="../Admin/login.php">ADMIN</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

                        



            <div class="page-heading">
                <h3></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple" style="text-align: center;">
                                                   <i class="bi bi-envelope-fill"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Mail</h6>
                                                <h6 class="text-white"><a href="email.php">Click Here</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                               <a href="view_tutor.php"> <h6 class="text-muted font-semibold">Tutor Request</h6>
                                                <h6 class="font-extrabold mb-0"><?php 

                                                  $sql=$con->query("select count(*) from `tutor_registration` where status='Pending'");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?>
                 </h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                             <h6 class="text-muted font-semibold">Tutors</h6>
                                                <h6 class="font-extrabold mb-0"><?php
            $sql=$con->query("select count(*) from `tutor_registration` where status='Approved'");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?></h6>  <a href="view_all_tutor.php">Click </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a href="view_allStudent.php"><h6 class="text-muted font-semibold">Students</h6>
                                                <h6 class="font-extrabold mb-0"><?php
            $sql=$con->query("select count(*) from `student_registration`");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?></h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>








 <div class="row">
    <?php
                      $sql="select * from subject ORDER BY sub_id DESC limit 4";
                      $result=$con->query($sql);
                      $count=$result->num_rows;
                      if($count>0){
                        while($row=$result->fetch_assoc()){
                          ?>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple" style="text-align: center;">
                                               <img src="<?php echo $row['image']?>" width="50" height="50">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold"><?php echo $row['subject']?></h6>
                                                <h6 class="text-black">&#8377;<?php echo $row['amount']?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                              <?php    }
                      }
                      ?>
                           
                            
                           
                        </div>
                        


























                        
                    </div>
                    <div class="col-12 col-lg-3">
                       <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="icon dripicons-web"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                             <h6 class="text-muted font-semibold">New Payments</h6>
                                                <h6 class="font-extrabold mb-0"><?php
            $sql=$con->query("select count(*) from `payment` where  pay_status=''");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?></h6>  <a href="view_payment.php">Click </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                      $sql="select * from subject limit 3";
                      $result=$con->query($sql);
                      $count=$result->num_rows;
                      if($count>0){
                        while($row=$result->fetch_assoc()){
                          ?>
                        <div class="card">
                            <div class="card-header">
                                <img src="<?php echo $row['image']?>" width="100" height="100">
                                <h4><?php echo $row['subject']?></h4>
                            </div>
                            <div class="card-body">
                                
                                  <h3 class="m-0 survey-value">&#8377;<?php echo $row['amount']?></h3>
                                
                            </div>
                        </div>

                          <?php    }
                      }
                      ?>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        
                    </div>
                    <div class="float-end">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
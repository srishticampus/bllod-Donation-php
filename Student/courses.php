<?php
include 'header.php';

?><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>SUBJECTS</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">





<?php

$sql="select * from subject";
$result=$con->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
  ?>

 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="../Admin/<?php echo $row['image'] ?>" class="img-fluid" alt="..." width="350" style="height: 200px;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                  <p class="price">&#8377;<?php echo $row['amount']?></p>
                </div>

                <h3><a href="trainers.php"><?php echo $row['subject']?></a></h3>
                <p><?php echo $row['description'];?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                   <!--  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span> -->
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                   <!--  <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65 -->
                  </div>
                </div>
              </div>
            </div>
          </div> 
          
          <br><br>



  <?php
}
?>



         <!-- End Course Item-->

           <!-- End Course Item-->

           <!-- End Course Item-->

        </div>
      </div>

      

    </section><!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>
<!-- End Header -->
<?php include 'header.php';?>
<style type="text/css">
  .btn-grey1{
   color: grey;
  }
  .btn-warning1{
    
     color: #fcd703;
  }
  /*body,#trainers .member{
    background-image: linear-gradient(to right, #c7b4d1 , #d696b6);
  }*/
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
     
      <a href="Student/signup.php" class="btn-get-started">REGISTER</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="Student/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
            <p class="font-italic">
              You can search and request to your tutors and to get good learning.You get:
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Good Teaching</li>
              <li><i class="icofont-check-circled"></i> 90 above marks</li>
              <li><i class="icofont-check-circled"></i>Qualified and Experienced Tutors</li>
              
            </ul>
            <p>
             
            </p>
            <a href="Student/about.php" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php
            $sql=$con->query("select count(*) from `student_registration`");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?></span>
            <p>Students</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php
            $sql1=$con->query("select count(*) from `subject`");
            $count1=$sql1->num_rows;
if($count1>0){
           while($row1=$sql1->fetch_assoc()){
           echo (int)$row1['count(*)'];

}}

            ?></span>
            <p>Subjects</p>
          </div>


          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php
            $sql2=$con->query("select count(*) from `Tutor_registration`");
            $count2=$sql2->num_rows;
if($count2>0){
           while($row2=$sql2->fetch_assoc()){
           echo (int)$row2['count(*)'];

}}

            ?></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
   

    <!-- ======= Features Section ======= -->
    
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Subject</h2>
          <p>Popular Subject</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php

$sql="select * from subject ORDER BY sub_id DESC limit 3";
$result=$con->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
  ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="Admin/<?php echo $row['image'] ?>" class="img-fluid" alt="..." width="350" style="height: 200px;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                  <p class="price">&#8377;<?php echo $row['amount']?></p>
                </div>

                <h3><a href="trainers.php"><?php echo $row['subject']?></a></h3>
                <p><?php echo $row['description'];?></p>
                
              </div>
            </div>
          </div> 



  <?php
}
?>
<!-- End Course Item-->

         


        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainers</h2>
          <p>Our Professional Trainers</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php

          $sql="SELECT *
FROM tutor_registration  where status='Approved' limit 3";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
  ?>


   <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" style="width: 300px;">
              
              <img src="Tutor/<?php echo $row['image'] ?>" class="img-fluid" alt="">
              <div class="member-content">
                 <h4><?php echo $row['firstname'].' '.$row['lastname'];?></h4>
                <span><?php echo $row['subject'];?></span>
                <span><?php echo $row['amount'];?></span>
                <p >
                 <?php echo $row['email'];?> <br> 
                 <?php echo $row['phone'];?> 
                </p>
                <p>
                
                 <br>
              
 


               
                </p>
                <div class="social">
                 <?php
                 $tutor_id=$row['tutor_id'];
               

$sql = "
    SELECT round(avg(`star_count`),2) AS `average_rate`, count(`star_count`) AS `num_of_rating`
    FROM rateing 
    WHERE tutor_id = '$tutor_id' ";
$query = mysqli_query($con,$sql);
$rating = mysqli_fetch_assoc($query);
?>

<div>
    <!-- <h4 style="color: #1478FF; font-size:30px; font-family:  " >    <?php echo $rating['average_rate'];  ?> Avergae rating </h4> -->
     <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-grey1";
                  if($i <= $rating['average_rate']) {
                    $ratingClass = "btn-warning1";
                  }
                ?>
                <a class="btn ">
                  <span class="icofont-star <?php echo $ratingClass; ?>" aria-hidden="true"></span>
                </a>               
                <?php } ?>
</div>
                </div>
              </div>
            </div>
          </div>
  <?php
}?>
         
<!-- 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>
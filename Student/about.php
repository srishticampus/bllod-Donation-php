<!-- End Header -->
<?php include 'header.php';?>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>ABOUT US</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/img/about.jpg" class="img-fluid" alt="">
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

    
        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

  <?php

$sql="select * from `famous`";
$result=$con->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
  ?>

  <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="../Admin/<?php echo $row['file'] ?>" class="testimonial-img" alt="">
              <h3><?php echo $row['name'];?></h3>
              <h4><?php echo $row['subject'];?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $row['description'];?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
  <?php
}
  ?>

          
          

          

          


        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>
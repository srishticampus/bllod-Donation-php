<?php include 'header.php'?>
    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
				<!-- <div class="row">
						<?php
                      $sql="select * from tutor_registration where status='Approved' limit 6";
                      $result=$con->query($sql);
                      $count=$result->num_rows;
                      if($count>0){
                        while($row=$result->fetch_assoc()){

?>

                        	<div class="col-lg-2 grid-margin stretch-card">
							<div class="card">
								<div class="card-body pb-0">
									<p>Tutor</p>
										
									<div class="d-flex align-items-center justify-content-between">
										<h6 class="text-info font-weight-bold"><?php echo $row['firstname'].' '.$row['lastname']?></h6>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i><img src="<?php echo $row['image']?>" width="50" height="50"></i>
									</div>
								</div>
								<br>
								<p style="text-align: center;">Join Date:<?php echo $row['date']?></p>
								<br>
								<br>
								 <canvas id="invoices"></canvas> -->
								<!--<div class="line-chart-row-title"><?php echo $row['subject']?></div>
							</div>
						</div>
                       <?php }}
                          ?>
						
						
						
						
						
						
					</div> -->
					<div class="row mt-4">
						<div class="col-lg-8 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">



									<div class="row">

										<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body pb-0">
								<a href="requested-demo.php"><div class="d-flex align-items-center justify-content-between">
										<h2 class="text-info font-weight-bold">New Request</h2>

										<?php
            $sql=$con->query("select count(*) from `student_registration` inner JOIN request ON student_registration.stud_id=request.stud_id where request.tutor_id=$tutor_id and request.status='Requested' ");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?>
									</div></a>	
									 <div style="text-align: center;;" ><i class="mdi mdi-account-multiple mdi-48px text-dark"></i></div>
								</div>
								 
								
								
							</div>
						</div>



										<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-info font-weight-bold">Students</h2>

										<h1>	<?php
            $sql=$con->query("select count(*) from `student_registration` inner JOIN request ON student_registration.stud_id=request.stud_id where request.tutor_id=$tutor_id and request.status='Approved' ");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?>
            </h1>

         
									</div>
									   <div style="text-align: center;;" ><i class="mdi mdi-account-multiple mdi-48px text-dark"></i></div>
								</div>
								<canvas id="invoices"></canvas>
								<div class="line-chart-row-title"></div>
							</div>
						</div>





<!-- 
										<div class="col-lg-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-info font-weight-bold">Tutors</h2>
											<h1><?php
            $sql=$con->query("select count(*) from `tutor_registration` where status='Approved'");
            $count=$sql->num_rows;
if($count>0){
           while($row=$sql->fetch_assoc()){
           echo (int)$row['count(*)'];

}}

            ?>
        </h1>
									</div>
									<div style="text-align: center;;" ><i class="mdi mdi-account-multiple mdi-18px text-dark"></i></div>
								</div>
								<canvas id="invoices"></canvas>
								<div class="line-chart-row-title"></div>
							</div>
						</div> -->




									</div>
									
								</div>
							</div>
						</div>
						<?php
$sql="select * from tutor_registration where tutor_id=$tutor_id";
$result=$con->query($sql);
$row=$result->fetch_assoc();
						?>
						<div class="col-lg-4 mb-3 mb-lg-0">
							<div class="card congratulation-bg text-center">
								<div class="card-body pb-0">
									<img src="<?php echo $row['image']?>" alt="">  
									<h2 class="mt-3 text-white mb-3 font-weight-bold">WELCOME
										<?php echo $row['firstname'].' '. $row['lastname']?>
									</h2>
									
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row">
						<?php
                      $sql="select * from subject limit 6";
                      $result=$con->query($sql);
                      $count=$result->num_rows;
                      if($count>0){
                        while($row=$result->fetch_assoc()){

?>

                        	<div class="col-lg-2 grid-margin stretch-card">
							<div class="card">
								<div class="card-body pb-0">
									<div class="d-flex align-items-center justify-content-between">
										<h2 class="text-info font-weight-bold">&#8377;<?php echo $row['amount']?></h2>
										<img src="../Admin/<?php echo $row['image']?>" width="50" height="50">
									</div>
								</div>
								<canvas id="invoices"></canvas>
								<div class="line-chart-row-title"><?php echo $row['subject']?></div>
							</div>
						</div>
                       <?php }}
                          ?>
						
						
						
						
						
						
					</div> -->
					
							
						
					
					<div class="row">
						<!-- <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between">
										<h4 class="card-title">Support Tracker</h4>
										<h4 class="text-success font-weight-bold">Tickets<span class="text-dark ml-3">163</span></h4>
									</div>
									<div id="support-tracker-legend" class="support-tracker-legend"></div>
									<canvas id="supportTracker"></canvas>
								</div>
							</div>
						</div> -->
					<!-- 	<div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-lg-flex align-items-center justify-content-between mb-4">
										<h4 class="card-title">Product Orders</h4>
										<p class="text-dark">+5.2% vs last 7 days</p>
									</div>
									<div class="product-order-wrap padding-reduced">
										<div id="productorder-gage" class="gauge productorder-gage"></div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<!-- <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              
            </div>
          </div>
        </footer> -->
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
    <!-- base:js -->
   <!--  <script src="../assets/vendors/base/vendor.bundle.base.js"></script>
  
    <script src="../assets/js/template.js"></script>
    
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
		<script src="../assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="../assets/vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="../assets/vendors/justgage/justgage.js"></script>
   
    <script src="../assets/js/dashboard.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>
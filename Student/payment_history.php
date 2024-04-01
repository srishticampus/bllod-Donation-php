<?php
require 'header.php';
?>


 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>PAYMENT HISTORY</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <br>
    <br>
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        	 <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
           
              <div class="card-body">

              	 <div class="table-responsive pt-4">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Reciever Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Amount</th>
                            
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT student_registration.name,student_registration.email,student_registration.phone,student_registration.address,student_registration.district,payment.payment_date,payment.payment_time,payment.amount
FROM student_registration
Left JOIN payment ON student_registration.stud_id=payment.stud_id where student_registration.stud_id='$id'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo 'FUGUIDE'?></td>
                                                        <td><?php echo $row['payment_date']?></td>
                                                        <td><?php echo $row['payment_time']?></td>
                                                        
                                                        <td><?php echo '-'.$row['amount']?></td>
                                                    
                                                       
                                                       
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                      </table>
                     
                  </div>
              </div>
          </div>
      </div>
        	</div>
        </div>
    </section>
</main>
<?php
require 'footer.php';
?>
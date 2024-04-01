<?php
require 'header.php';
?>


 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>STUDY MATERIALS</h2>
        
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
                            <th>Material ID</th>
                            <th>Tutor Name</th>
                            <th>Subject</th>
                            <th>STD</th>
                            <th>File</th>
                            <th>Date</th>
                            <th>Time</th>
                            
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT *
FROM  materials ";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo 'TUF'.$row['id']?></td>
                                                        <td><?php $tutor_id= $row['tutor_id'];
if($tutor_id!=0){
$s="select * from tutor_registration where tutor_id=$tutor_id";
$r=$con->query($s);
$ro=$r->fetch_assoc();
echo $ro['firstname'].' '.$ro['lastname'];}
else{
  echo 'Admin';
}
                                                  ?></td>
                                                        <td><?php echo $row['subject']?> </td>
                                                        <td><?php echo $row['std']?></td>
                                                        
                                                        <td><a href="../Tutor/<?php echo $row['file']?>" target="_blank"><?php echo $row['file']?></a></td>
                                                         <td><?php echo $row['date']?></td>
                                                          <td><?php echo $row['time']?></td>

                                                    
                                                       
                                                       
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
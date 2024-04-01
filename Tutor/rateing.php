<?php include 'header.php';?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Rating table</h4>
                  
                  <div class="table-responsive pt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            rating
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                           Comments
                          </th>
                        </tr>
                      </thead>
                      <?php
                      $i=1;
$sql="select * from student_registration Left JOIN rateing ON student_registration.stud_id=rateing.stud_id where rateing.tutor_id='$tutor_id'";
$result=$con->query($sql);
$count=$result->num_rows;
while($row=$result->fetch_assoc()){
  ?>
   <tbody>
                        <tr>
                          <td>
                          <?php echo $i++;?>
                          </td>
                          <td>
                           <?php echo $row['name'];?>
                          </td>
                          <td>
                            
                         <div class="review-block-rate">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if($i <= $row['star_count']) {
                    $ratingClass = "btn-warning";
                  }
                ?>
                <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="fa fa-star" aria-hidden="true"></span>
                </button>               
                <?php } ?>
              </div>
                           
                          </td>
                          <td>
                           <?php echo $row['title']?>
                          </td>
                          <td>
                            <?php echo $row['comment']?>
                          </td>
                        </tr>
                       
  <?php
}


                      ?>
                     
                         
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>

</html>

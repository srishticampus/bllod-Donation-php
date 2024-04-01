<?php
include 'header.php';

?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Study Materials</h4>
                  <a href="#myModal" class="get-started-btn" data-toggle="modal" style="float:right;color: red;font-size: 18px;font-weight: 18px;"><b>Upload Study materials</b></a>
                  <div class="table-responsive pt-3">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Material ID</th>
                            <th>Subject</th>
                            <th>std</th>
                            <th>File</th>
                            <th>Date</th>
                            <th>Time</th>
                           
                            <th>Action</th>
                            
                            
                           
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="SELECT *
FROM materials where tutor_id='$tutor_id' ";
    $result=$con->query($sql);

    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                  <td>  <?php echo 'TUF'.$row['id']?></td>
                                                       
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['std']?></td>
                                                        <td><a href="<?php echo $row['file']?>"><?php echo $row['file']?></a></td>
                                                        <td><?php echo $row['date']?></td>
                                                       <td><?php echo $row['time']?></td>
                                                        <td><a class="btn btn-danger" href="delete_material.php?id=<?php echo $row['id'];?>">Delete



                                                       </a></td>
                                                        
                                                       
                                                       
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                      </table>
                      <div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form action="material_action.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">        
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 

        
        <div class="form-group">
          <select class="form-control" name="subject">
            <option value="">Select Subject</option>
            <?php
$stud="";
$req="";
$sql1="SELECT *
FROM subject";
$result1=$con->query($sql1);
while($row1=$result1->fetch_assoc()){
  $stud=$row1['stud_id'];
  $req=$row1['request_id'];

  echo '<option value="'.$row1['subject'].'">'.$row1['subject'].'</option>';
}

            ?>

          </select>
        </div> 
        <div class="form-group">
            <label>STD</label>
             <select name="class" class="form-control" required="">
             <option value="">Select class</option>
             <option>I</option>
             <option>II</option>
             <option>III</option>
             <option>IV</option>
             <option>V</option>
             <option>VI</option>
             <option>VII</option>
             <option>VIII</option>
             <option>IX</option>
             <option>X</option>
             <option>XI</option>
             <option>XII</option>
             
           </select>
          </div> 
           
          <div class="form-group">
            <label>Upload Materials</label>
            <input type="file" class="form-control" required="required" name="file">
          </div>
          
        </div>
        <div class="modal-footer justify-content-between">
         
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
                     
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

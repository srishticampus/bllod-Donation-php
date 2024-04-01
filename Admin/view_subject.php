<?php
include 'header.php';
if(isset($_GET['s'])){
    $s=$_GET['s'];

  
}
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
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <div id="main">
    <div class="dropdown">
  <button class="dropbtn">ADMIN</button>
  <div class="dropdown-content">
  <a href="../Tutor/tutor-login.php">TUTOR</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View Subject</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                     <input type="hidden" id="success" value="<?php echo $s;?>">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                          <tr>
                           <th>#</th>
                            <th>Subject</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                                                             <?php $i=1;
    $sql="select * from `subject` ";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
            
                           <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['amount']?></td>
                                                        <td style="width: 20px;"><?php echo $row['description']?></td>
                                                        <td><img src="<?php echo $row['image']?>" width="100" height="100"></td>
                                                        <td><a href="delete_subject.php?id=<?php echo $row['sub_id']?> "><i class="icon dripicons-cross" style="font-size:20px;color:red"></i></a>&nbsp;&nbsp;<a href="view_sub.php?id=<?php echo $row['sub_id']?> "><i class="icon dripicons-article" style="font-size:20px;color:red"></i></a></td>
                                                        
                                                       
                                                      
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>
                        
                            </table>
                        </div>
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

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

      <script type="text/javascript">
         $(document).ready(function(){
            var id=$('#success').val();
            // alert(id);
            if(id=='success'){
                swal({  title: 'Subject',
                 text: 'Subject Added Successfull!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'view_subject.php';  
                    });
                     });
            }
            else if(id=='failed'){
                swal("Added Failed!");
            }
              else if(id=='succ'){


                 swal({  title: 'Subject',
                 text: 'Subject Updated Successfull!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'view_subject.php';  
                    });
                     });
            }


         });

         
     </script>
</body>

</html>
<?php

include 'header.php';
$id=$_GET['id'];
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
                       
                        <div class="col-12 col-md-12 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Subject</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Subject</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <input type="hidden" id="success" value="<?php echo $s;?>">
                                        <form class="form form-horizontal" action="update_subject.php" method="post" enctype="multipart/form-data">
                                          <?php
                      $sql="select * from subject where sub_id=$id";
                      $result=$con->query($sql);
                      $row=$result->fetch_assoc();
                      ?>
                                            <div class="form-body">
                                              <input type="hidden" name="id" value="<?php echo $id?>">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>Subject</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="subject" placeholder="Subject"  value="<?php echo $row['subject']?>" >
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Amount</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="text" id="email-id" class="form-control"
                                                            name="amount" placeholder="Amount" value="<?php echo $row['amount']?>">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Description</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <textarea id="contact-info" class="form-control"
                                                            name="description" placeholder="Description"> <?php echo $row['description']?></textarea>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Image</label>
                                                    </div>
                                                    <div class="col-md-10 form-group">
                                                        <input type="file" id="password" class="form-control"
                                                          placeholder="image" name="avatar" onchange="readURL(this);" />
  
    <img src="<?php echo $row['image']?>" id="blah" src="#" alt="your image" width="100" height="100">
                                                    </div>
                                                    
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Update</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->

                <!-- Basic Vertical form layout section start -->
               
                <!-- // Basic Vertical form layout section end -->


                <!-- // Basic multiple Column Form section start -->
               
                <!-- // Basic multiple Column Form section end -->
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
                        location = 'add_subject.php';  
                    });
                     });
            }
            else if(id=='failed'){
                swal("Added Failed!");
            }

         });

         
     </script>
</body>

</html>
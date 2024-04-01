

<?php
require 'header.php';
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<style type="text/css">
    
    body{
    background: #edf1f5;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
    margin-left: 250px;
}
.mailbox-widget .custom-tab .nav-item .nav-link {
    border: 0;
    color: #fff;
    border-bottom: 3px solid transparent;
}
.mailbox-widget .custom-tab .nav-item .nav-link.active {
    background: 0 0;
    color: #fff;
    border-bottom: 3px solid #2cd07e;
}
.no-wrap td, .no-wrap th {
    white-space: nowrap;
}
.table td, .table th {
    padding: .9375rem .4rem;
    vertical-align: top;
    border-top: 1px solid rgba(120,130,140,.13);
}
.font-light {
    font-weight: 300;
}
  
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
<div class="container">
    <div class="row">
            <div class="dropdown">
  <button class="dropbtn">ADMIN</button>
  <div class="dropdown-content">
  <a href="../Tutor/tutor-login.php">TUTOR</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body bg-primary text-white mailbox-widget pb-0">
                    <h2 class="text-white pb-3">Your Mailbox</h2>
                    <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                                <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                <span class="d-none d-md-block"> INBOX</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                <span class="d-none d-md-block">SENT</span>
                            </a>
                        </li> -->
                       <!--  <li class="nav-item">
                            <a class="nav-link" id="spam-tab" data-toggle="tab" aria-controls="spam" href="#spam" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                <span class="d-none d-md-block">SPAM</span>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete" href="#delete" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                <span class="d-none d-md-block">DELETED</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                                <div class="col-sm-12 col-md-12">
                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i></h3>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-info mr-3">
                                            <a href="#">
                                                <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <span class="ml-2 font-normal text-dark">Compose</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item text-danger">
                                            <a href="#">
                                                <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <span class="ml-2 font-normal text-dark">Delete</span>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-12">
                                    <tbody>
                                        <!-- row -->

                                        <?php
  $sql="SELECT tutor_registration.firstname,tutor_registration.lastname,tutor_registration.email,tutor_registration.phone,tutor_registration.address,tutor_registration.district,tutor_registration.subject,request.tutor_id,request.payment_status,request.status,request.request_id,democlass.date,democlass.time,democlass.current_date,democlass.current_time,democlass.stud_id,democlass.type,democlass.demo_status,democlass.meeting
FROM tutor_registration
inner JOIN request ON tutor_registration.tutor_id=request.tutor_id inner JOIN democlass ON request.request_id=democlass.request_id where request.status ='Approved' and request.payment_status='Payment Approved'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
    

                                        ?>
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <!-- <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                </div> -->
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <td>
                                                <span class="mb-0 text-muted"><?php echo $row['firstname'].' '. $row['lastname'];?></span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span class="badge badge-pill text-white font-medium badge-danger mr-2">Report</span>
                                                    <span class="text-dark"><?php echo $row['type']?> <?php
if($row['demo_status']==2){
    echo 'cancelled';
}
else{
    echo 'scheduled';
}?>
<?php 
$stud_id=$row['stud_id'];
$sql1="select * from student_registration where stud_id=$stud_id";
$result1=$con->query($sql1);
$row1=$result1->fetch_assoc();
?>

                <?php echo $row1['name']?> @ <?php echo $row['date'].' '.$row['time']?></span>
                                                </a><br>
                                               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php 
                                                if($row['type']=='Demo Class'){
                                               echo 'Meeting: '.$row['meeting'].'';
                                           }
?>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted"><?php echo $row['current_date'].' '.$row['current_time']?></td>
                                        </tr>
                                    <?php }?>
                                        <!-- row -->
                                        
                                        <!-- row -->
                                       
                                       
                                       
                                        
                                        <!-- row -->
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Lets check profile</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Come on you have a lot message</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                        <div class="row p-3 text-dark">
                            <div class="col-md-6">
                                <h3 class="font-light">Just do Settings</h3>
                                <h4 class="font-light">you can use it with the small code</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- container-scroller -->
  
    


   
  </body>
  
</html>
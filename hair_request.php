<?php
include 'header.php';
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/haird.jpeg);">
    <div class="container">
        <div class="title-text">
            <h1>hair request</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>hair request</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3>Request<span> Hair</span></h3>
          </div>
          <span id="span"></span>
          <br>
          <form name="contact_form" class="default-form contact-form" action="hairrequest_action.php" enctype="multipart/form-data" method="post">
            <div class="row">
               
             <div class="col-md-12">
                   <label>Are you a cancer patient?</label>
                 </div>
                      <input type="radio" class="form-control" name="patient" id="patient1" value="Yes" style="height: 20px;width: 20px;">&nbsp;&nbsp;<label>Yes</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" name="patient" id="patient2" value="No" style="height: 20px;width: 20px">&nbsp;&nbsp;<label>No</label>

                  <div class="col-md-12">
                    <div class="form-group">
                    <textarea class="form-control"  name="details" id="details" placeholder="Details of illness" ></textarea>
                 </div>
                 </div>
                  
                   <div class="col-md-12">
                   <label>Gender</label>
                   </div>
                  <input type="radio" class="form-control" id="gender" name="gender" value="Male" style="height: 20px;width: 20px;">&nbsp;&nbsp;<label>Male</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" id="gender" name="gender" value="Female" style="height: 20px;width: 20px">&nbsp;&nbsp;<label>Female</label>
               
            
              
                  
                    
                   
                    
               
              <div class="col-md-12">
                <div class="form-group" id="file" style="display: none;">
                  <label>Upload Documents</label>
                  <input type="file" class="form-control" name="file"  placeholder="Upload Documents" >
                </div>
                <div class="form-group text-center">
                  <button type="submit" id="blood_id" class="btn-style-one">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
        <div class="appointment-image-holder ml-0 ml-lg-4">
          <figure>
            <img loading="lazy" class="w-100" src="images/background/hair.jpg" style="height: 700px;" alt="Appointment">
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Section -->

<!--team section-->
<br><br><br>
<!--End team section-->

<!--footer-main-->
<?php
include 'footer.php';
?>
<script type="text/javascript">
  $(document).ready(function(){
    
    $('input[type=radio][name=patient]').change(function(){
var patient=$(this).val();
if(patient=='No'){
  $('#file').hide();
}
else{
$('#file').show();
}
 
    });


   

  });


</script>
<!-- <script type="text/javascript">
  $(document).ready(function(){
$('#blood_id').click(function(){
  var group= $('#group').val();
  var date=$('#date').val();
  var address=$('#address').val();
  
  $.ajax({
    url:"bloodrequest_action.php",
    type:"post",
    data:{group:group,date:date,address:address},
    success:function(data){
      
      if(data==1){
        $('#span').html('<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details added Successfull</div>');
 $('#group').val('');
  $('#lastdate').val('');
 
      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Added Failed</div>');
      }

    }

  });

});
  });
</script> -->


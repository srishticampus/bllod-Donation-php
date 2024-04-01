<?php
include 'header.php';
?>
<!--End Main Header -->

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/haird.jpeg);">
    <div class="container">
        <div class="title-text">
            <h1>hair donation</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>hair donation</li>
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
            <h3>Donate<span>Hair</span></h3>
          </div>
          <span id="span"></span>
          <br>

          <form name="contact_form" class="default-form contact-form" action="!#" method="post">
            <div class="row">
              <!-- <div class="col-md-12"> -->

               
                  <input type="radio" class="form-control" name="type" id="type" value="First time Donor" style="height: 20px;width: 20px;">&nbsp;&nbsp;<label>First time Donor</label>&nbsp;&nbsp;
                  <input type="radio" class="form-control" name="type" id="type" value="Repeat Donor" style="height: 20px;width: 20px">&nbsp;&nbsp;<label>Repeat Donor</label>
              
            <!--   </div> -->
            
              <div class="col-md-12">
                <div class="form-group">
                   <label>Hair Length</label>
                  <input class="form-control" type="text" name="length" id="length" placeholder="Length of Donate. eg:10 cm" required="">
                </div>
              </div>
              
               
             
              
                  
                    
                   
                    
               
              <div class="col-md-12">
                <!-- <div class="form-group">
                  <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
                </div> -->
                <div class="form-group text-center">
                  <button type="button" id="blood_id" class="btn-style-one">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0 order-0 order-lg-1">
        <div class="appointment-image-holder ml-0 ml-lg-4">
          <figure>
            <img loading="lazy" class="w-100" src="images/background/hair.jpg" style="height: 500px;" alt="Appointment">
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
$('#blood_id').click(function(){
 
 
  var type=$('input[name=type]:checked').val();
  var length=$('#length').val();

  
  $.ajax({
    url:"donate_hair_action.php",
    type:"post",
    data:{type:type,length:length},
    success:function(data){
      
      if(data==1){
        $('#span').html('<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details added Successfull</div>');
 $('#type').val('');
  $('#length').val('');
 
      }
      else if(data==2){
         $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Already added</div>');

      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Details Added Failed</div>');
      }

    }

  });

});
  });
</script>


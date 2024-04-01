
<?php

if(isset($_GET['s'])){
    $s=$_GET['s'];

  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <!-- <link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css.map">
<!--===============================================================================================-->

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/css/style.css">
<!--===============================================================================================-->
<title>TutorsCorner</title>
</head>
<style type="text/css">
  
  #select{
     border-color: #fff transparent transparent transparent;
  }
  #subject{
     border-color: #fff transparent transparent transparent;
  }
</style>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <input type="hidden" id="success" value="<?php echo $s;?>">
      <form class="contact100-form validate-form" action="registration_action.php" method="post" enctype="multipart/form-data">
        <span class="contact100-form-title" style="color: #140fa3">
          SIGN UP
        </span>

        <label class="label-input100" for="first-name">Tell us your name *</label>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
          <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
          <input class="input100" type="text" name="last-name" placeholder="Last name">
          <span class="focus-input100"></span>
        </div>
        <label class="label-input100" for="email">Enter your DOB *</label>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input id="dob" class="input100" type="date" name="dob" placeholder="Date of birth">
          <span class="focus-input100"></span>
        </div>
<label class="label-input100" for="first-name">Gender *</label>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
          <input id="female"  type="radio" name="gender" value="Female" >Female
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
          <input  type="radio" name="gender" id="male" value="Male">Male
          <span class="focus-input100"></span>
        </div>



        <label class="label-input100" for="email">Enter your email *</label>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="phone">Enter phone number</label>
        <div class="wrap-input100">
          <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="message">Address*</label>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <textarea id="message" class="input100" name="address" placeholder="Address"></textarea>
          <span class="focus-input100"></span>
        </div>



<label class="label-input100" for="message">District</label>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <select class="input100" required="required" name="district" id="select" >
              <option value=""> Select</option>
              <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                <option value="Kollam">Kollam</option>
                  <option value="Alappuzha">Alappuzha</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                      <option value="Kottayam">Kottayam</option>
                        <option value="Idukki">Idukki</option>
                          <option value="Ernakulam"> Ernakulam</option>
                            <option value="Thrissur">Thrissur</option>
                              <option value="Palakkad">Palakkad</option>
                                <option value="Malappuram">Malappuram</option>
                                  <option value="Kozhikode">Kozhikode</option>
                                    <option value="Wayanadu">Wayanadu</option>
                                      <option value="Kannur">Kannur</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                         
            </select>
          <span class="focus-input100"></span>
        </div>



<label class="label-input100" for="message">Subject</label>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <select  class="input100" name="subject" placeholder="Subject" id="subject">
            <option value="">Select</option>
            <option value="Malayalam">Malayalam</option>
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Biology">Biology</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Physics">Physics</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Social studies">Social studies</option>

          </select>
          <span class="focus-input100"></span>
        </div>
        <label class="label-input100" for="phone">image</label>
        <div class="wrap-input100">
          <input id="avatar" class="input100" type="file" name="avatar">
          <span class="focus-input100"></span>
        </div>

<label class="label-input100" for="phone">Enter Amount</label>
        <div class="wrap-input100">
          <input id="text" class="input100" type="amount" name="amount" placeholder="Enter your amount">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="phone">Enter Password</label>
        <div class="wrap-input100">
          <input id="password" class="input100" type="password" name="password" placeholder="Enter your password">
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" style="background-color: #140fa3">
            Register
          </button>
        </div>
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('../assets/images/admin.png');">
       <!--  <div class="flex-w size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Address
            </span>

            <span class="txt2">
              Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
            </span>
          </div>
        </div> -->

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Lets Talk
            </span>

            <span class="txt3">
              +1 800 1236879
            </span>
          </div>
        </div>
        

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              General Support
            </span>

            <span class="txt3">
              contact@example.com
            </span>
            <span class="txt3" style="color: #140fa3">
             <a href="tutor-login.php" style="color: #140fa3">Login</a>
            </span>
          </div>


          
        </div>
      </div>
    </div>
  </div>



  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<!--  -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>


   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            var id=$('#success').val();
            // alert(id);
            if(id=='success'){
                swal({  title: 'Registration',
                 text: 'Registration Successfull!',  
                type: 'success',    
                showCancelButton: false,   
                closeOnConfirm: false,   
                confirmButtonText: 'Submit', 
                showLoaderOnConfirm: true, }, 
                function(){   
                    setTimeout(function(){     
                        location = 'tutor-login.php';  
                    });
                     });
            }
            else if(id=='failed'){
                swal("Registration Failed!");
            }

         });

         
     </script>
</body>
</html>

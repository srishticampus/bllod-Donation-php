<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutor Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../style.css">
    





 <style type="text/css">
    .main{
        background: linear-gradient(to bottom ,#ff758c,#ff7eb3)
    }
        .signup{
            margin-top: -135px;

        }
        .signup-content{
           margin-bottom:1000px;
  
        }
    </style>
</head>
<body>  
    <div class="main">
       
                        
        
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 style="color:black ;font-weight: bold; font-size: 40px;"class="form-title">Registration</h2>
                        <form method="POST" class="register-form" id="register-form" action="stud_registration.php">
                            <div class="form-group">
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
          <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
          <input class="input100" type="text" name="last-name" placeholder="Last name">
          <span class="focus-input100"></span>
        </div>
                            </div>
                            <div class="form-group">
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
          <span class="focus-input100"></span>
        </div>
                            </div>
                            <div class="form-group">
       <div class="wrap-input100">
          <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
          <span class="focus-input100"></span>
        </div>
                            </div>
                            <div class="form-group">
                                <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <textarea id="message" class="input100" size="400" name="address" placeholder="Address"></textarea>
          <span class="focus-input100"></span>
        </div>

                            </div>
                            <div class="form-group">
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
                            </div>
                            <div class="form-group">
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
                                
                            </div>
                            <div class="form-group">
                                <div class="wrap-input100">
          <input id="avatar" class="input100" type="file" name="avatar">
          <span class="focus-input100"></span>
        </div>
                            </div>
                           
                            
                            <div class="form-group form-button">
                                <div class="wrap-input100">
          <input id="text" class="input100" type="amount" name="amount" placeholder="Enter your amount">
          <span class="focus-input100"></span>
        </div>
                            </div>

            
<div class="form-group form-button">
                                <div class="wrap-input100">
          <div class="wrap-input100">
          <input id="password" class="input100" type="password" name="password" placeholder="Enter your password">
          <span class="focus-input100"></span>
        </div>
        </div>
                            </div>

<div class="form-group form-button">
                                <div class="wrap-input100">
          div class="container-contact100-form-btn">
          <button class="contact100-form-btn" style="background-color: #140fa3">
            Register
          </button>
        </div>
        </div>
                            </div>
                 </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../assets/images/signup-image.jpg" alt="sing up image"></figure>
                         <a href="tutor-login.php" style="color: #140fa3">Login</a>
                        <a href="alogin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
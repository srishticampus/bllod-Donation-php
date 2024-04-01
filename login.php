<?php
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style type="text/css">
  body{background: #eee url(http://subtlepatterns.com/patterns/sativa.png);}
html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 300px;
    margin: -40px auto;
    padding: 20px 40px 40px;
    text-align: center;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}


.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;

}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);

}

.avatar{
    width: 100px;height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #aaa;
    background-size: cover;
}


.form-box select{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box select:focus{
    outline: 0;
    background: #eee;
}

.form-box select{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}



.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

</style>
<!--End Main Header -->

<!--Page Title-->
<!-- <section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>login</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>login</li>
            </ul>
        </div>
    </div>
</section> -->
<!--End Page Title-->

<!-- Section -->
<section class="section style-three pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
        
         
            
  <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
              <span id="span"></span>
                <form autocomplete="off">
                  <select id="category"><option value="">Select</option>
                    <option value="agent">Coordinator</option>
                    <option value="public">Public</option></select>
                    <input name="user" id="user" type="text" placeholder="username" autocomplete="on">
                    <input type="password" id="pass" placeholder="password" autocomplete="off">
                    <button class="btn btn-info btn-block login" style="background-color: #b53422;border-color: #b53422" id="button" type="button">Login</button>
                </form>
            </div>
        </div>
        

        </div>
      </div>
     
    </div>
  </div>
</section>
<br><br><br><br><br>
<!-- End Section -->

<!--team section-->

<!--End team section-->

<!--footer-main-->
<?php
include 'footer.php';
?>
<script type="text/javascript">
$(document).ready(function(){
 $('#button').click(function(){
var name=$('#user').val();
var pass=$('#pass').val();
var category=$('#category').val();
$.ajax({
    url:"login_action.php",
    type:"post",
    data:{name:name,pass:pass,category:category},
    success:function(data){
     if(data==1){
        $('#span').html('<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Login Successfull</div>');
        $('#user').val('');
$('#pass').val('');
$('#category').val('');
setInterval(function () {window.location.href="index.php"}, 1000);

      }
      else{
 $('#span').html('<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Login Failed</div>');
      }

    }
});
 });

//
            
});

</script>
</body>

</html>

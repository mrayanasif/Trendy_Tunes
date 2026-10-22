<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Login | Trendy Tunes</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<?php
include_once 'header.php';

?>

    <!--Breadcumb Area Start-->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Login</h2>
        </div>
    </section>
    <!-- Breadcumb Area End -->

    <!--Login Area Start-->
<section class="login-area section-padding-100" >
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-8">
      <div class="login-content">
        <h3>Welcome Back</h3>
        <!-- Login Form -->
        <div class="login-form">
          <form id="loginForm" action="code.php" method="post">
            <div class="form-group">
              <label for="email">Email Address </label>
              <input type="email" class="form-control"id="email" name="useremail" placeholder="Enter Your Email"required />
              <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required/>
            </div>
            <button type="submit" class="btn oneMusic-btn mt-30" name="login">Sign In</button>
            <button type="button"class="btn oneMusic-btn mt-30 "onclick="window.location.href='register.php'">Join The Tour | Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php
include_once 'footer.php';
?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
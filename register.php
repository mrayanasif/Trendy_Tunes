<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Register | Trendy Tunes</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
    include_once 'header.php';
?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Register Your Self </h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <!--Sign Up START-->
   <section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    <h3>Create Your Account</h3>
                    <!-- Register Form -->
                    <div class="login-form">
                        <form id="registerForm" action="code.php" method="POST">

                            <div class="form-group">
                                <label for="FullName">FullName</label>
                                <input type="text" class="form-control" id="FullName" name="Fullname" placeholder="Enter Your Full Name" required pattern="[A-Za-z ]+" minlength="2" maxlength="50" onkeypress="return /[A-Za-z ]/i.test(event.key)">
                                <div class="invalid-feedback">Please enter a valid name (letters only).</div>
                            </div>

                             <div class="form-group">
                                <label for="lastName">UserName</label>
                                <input type="text" class="form-control" id="username" name="userName" placeholder="Enter Your username" required>
                                <div class="invalid-feedback">Please enter a valid usrename (letters only).</div>
                            </div>

                           
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control" id="phone" name="Number" placeholder="Enter Your Phone Number Without Area Code" required pattern="[0-9]{11}" maxlength="11" onkeypress="return /[0-9]/i.test(event.key)" title="Please enter exactly 11 digits">
                                <small class="form-text text-muted">Enter an 11-digit phone number.</small>
                                <div class="invalid-feedback">Phone number must be exactly 11 digits.</div>
                            </div>

                        
                            <div class="form-group">
                                <label for="registerEmail">Email Address</label>
                                <input type="email" class="form-control" id="registerEmail" name="useremail" placeholder="Enter Your E-mail" required>
                                <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                <div class="invalid-feedback">Please enter a valid email address (e.g., abc@example.com).</div>
                            </div>

                           
                            <div class="form-group">
                                <label for="registerPassword">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create Password" required>
                                <div class="invalid-feedback">Password must be at least 4 characters and not only dots, commas, or stars.</div>
                            </div>

                            <button type="submit" class="btn oneMusic-btn mt-30" name="register">Register</button>
                            <button type="button"class="btn oneMusic-btn mt-30"onclick="window.location.href='login.php'">Already Have an Account</button>

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
    <script src="js/form.js"></script>

</body>

</html>
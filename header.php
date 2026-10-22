<?php

include_once 'session.php';
?>
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/Trendy Tunes-logo-transparent.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="albums-store.php">Albums</a></li>
                                     <li><a href="index.php#artist">Artist</a></li>
                                    <li><a href="review.php">Review</a></li>
                                </ul>
                            
                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-right">
                                    <!-- Login/Register -->
                                        <div class="login-register-btn mr-50" style="color: white; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;">
                                             <?php if (isset($_SESSION['full_name'])): ?> Hello, <?php echo $_SESSION['full_name']; ?> |
                                                 <a href="logout.php" style="color: white; font-weight:bold;">Logout</a>
                                                    <?php else: ?>
                                                <a href="login.php" id="loginBtn" style="color: white;">Login / Register</a>
                                            <?php endif; ?>
                                        </div>


                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
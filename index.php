<?php
session_start();
include "admin/includes/config.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- Title -->
    <title>Festnest</title> 
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head> 
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php">FESTNEST</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="#home">Home</a></li> 
                                <li><a href="events.php">Events</a></li>
                                <li><a href="workshops.php">Workshops</a></li>
                                <li><a href="orders.php">Orders</a></li>
                                <li><a href="profile.php">Profile</a></li> 
                            </ul> 
                            <?
                            if($_SESSION!=''){ 
                            ?>
                            <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login <i class="zmdi zmdi-long-arrow-right"></i></a>
                            <? } else { ?>
                                <a href="logout.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Logout <i class="zmdi zmdi-long-arrow-right"></i></a>
                                <? } ?>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area" id="home">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/home/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Vignan <br>Fest</h2> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/home/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center"> 
                    <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Vignan <br>Fest</h2> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/home/3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center"> 
                    <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Vignan <br>Fest</h2> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End --> 

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/3.jpg);" id="about">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        
                        <h4>Team Members</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/about/1.jpg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Lucky+Suresh</h5> 
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/about/2.jpeg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Hemanth</h5> 
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/about/3.jpeg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Rajesh</h5>
                            
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/about/4.jpg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sudheer</h5>
                            
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </section>
    <!-- Our Speakings Area End --> 

    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-100" id="sponsor">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>OFFICIAL SPONSOR</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-1.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-2.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-3.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-4.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-5.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-6.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-7.png" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="img/core-img/p-8.png" alt=""></a>
                        </div>
                    </div>
                </div>

                <!-- Our client area -->
                <div class="col-12">
                    <div class="our-client-area mt-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- client Slider -->
                        <div class="client-area owl-carousel">
                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/bg-img/15.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Maria Hernandez</h6>
                                            <p>UX Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/bg-img/16.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Jacqueline Myers</h6>
                                            <p>UX Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/bg-img/15.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Maria Hernandez</h6>
                                            <p>UX Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->

     

    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0" id="contact">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Have Question?</p>
                        <h4>Contact us</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>184 Main Collins Street</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>(226) 446 9371</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>confer@gmail.com</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.confer.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
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
    <!-- Contact Area End -->

    <!-- Footer Area Start -->
    <? include('footer.php'); ?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
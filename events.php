<?php
include 'auth.php';
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
                                <li ><a href="index.php">Home</a></li> 
                                <li class="active"><a href="events.php">Events</a></li>
                                <li><a href="workshops.php">Workshops</a></li>
                                <li><a href="orders.php">Orders</a></li>
                                <li><a href="profile.php">Profile</a></li> 
                            </ul> 
                            <!-- Get Tickets Button -->
                            <?
                            if($_SESSION==''){ 
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
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12"> 

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <?
                                            $result=$con->query("SELECT * FROM `events` where events_status=1 ORDER BY `events_id` ASC");  
                                            $j=1;
                                            while($row = mysqli_fetch_assoc($result)) { 
                                        ?>
                                         
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb" style="height: 140px;">
                                                    <img src="admin/uploads/events/<?=$row['events_image']?>" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6><?=$row['events_name']?></h6>
                                                    <p><?=$row['events_info']?></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><span>₹</span> <?=$row['events_price']?></p> 
                                            </div>
                                            <!-- Schedule Btn -->
                                            <? 
                                            $proj = $row['events_price'];  
                                            $pj=md5($proj); 
                                            $na = $row['events_name'];
                                            $naam = md5($na);
                                            ?>
                                            <a href="pay.php?name=<?=$naam?>&type=events&wage=<?=$pj?>" class="btn confer-btn">Pay<i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                        <? } ?> 
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->

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
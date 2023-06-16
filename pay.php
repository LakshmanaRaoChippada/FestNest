<?php
include 'auth.php';
include "admin/includes/config.php";
 
if(isset($_POST['btn_submit'])){    
    extract($_POST); 
    if(is_uploaded_file($_FILES['orders_image']['tmp_name'])){
        $temp=$_FILES['orders_image']['tmp_name'];
        $file=time()."-".$_FILES['orders_image']['name'];
        move_uploaded_file($temp,"admin/uploads/orders/".$file);  
        $file_sql="`orders_image`='$file'"; 
    } 
    $hey= $_SESSION['name']; 
    $sql1=mysqli_query($con,"SELECT * FROM `events` where md5(events_name)='".$_GET['name']."' AND md5(events_price)='".$_GET['wage']."'"); 
    $row1=mysqli_fetch_assoc($sql1);
    $ep=$row1['events_price'];
    $en=$row1['events_name'];
    $id1=$row1['events_id'];
    $rs=mysqli_query($con,"INSERT INTO `orders` set `orders_name`='$en',`orders_student`='$hey',orders_stuid='".$_SESSION['student_id']."',orders_txnno='$orders_txnno',
    `orders_type`='".$_GET['type']."',orders_price='$ep',$file_sql");  
    print_r("INSERT INTO `orders` set `orders_name`='$en',`orders_student`='$hey',orders_stuid='".$_SESSION['student_id']."',orders_txnno='$orders_txnno',
    `orders_type`='".$_GET['type']."',orders_price='$ep',$file_sql");
    if($rs){
        echo "<script>alert('Student Details Added Successfully');</script>";
        header( "location:eventsvideo.php?videoid=$id1" );
    }
    else echo "<script>alert('Student Details Not Added');</script>";  
}  
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="workshops.php">Workshops</a></li>
                                <li class="active"><a href="orders.php">Orders</a></li>
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
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">pay</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">pay</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area section-padding-100-0">
        <div class="container">
            <div class="row">
            <div class="col-12 col-lg-4"></div>
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">upi id: vignan@ybl</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="img/qrcode.png" alt="">
                        </div>
                        <? 
                            $sql=mysqli_query($con,"SELECT * FROM `events` where md5(events_name)='".$_GET['name']."' AND md5(events_price)='".$_GET['wage']."'"); 
                            $row=mysqli_fetch_assoc($sql);
                        ?> 
                        <h2 class="ticket-price"><span>₹</span><?=$row['events_price']?></h2> 
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> <?=$row['events_name']?></p> 
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="ticket-pricing-table-details">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="orders_txnno"  placeholder="Transaction number" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <span>Upload Transaction File</span>
                                        <input type="file" class="form-control mb-30" name="orders_image" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="btn_submit" class="btn confer-btn">Submit<i class="zmdi zmdi-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->
    
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
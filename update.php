<?php 
include 'auth.php';
include "admin/includes/config.php";
if(isset($_POST['btn_submit'])){    
    extract($_POST);  
    if($_GET['stuid']!=''){ 
        $rs1=mysqli_query($con,"UPDATE student set `student_pass`='$student_pass' where `student_id`='".$_GET['stuid']."'");  
    }
        if($rs1){
            echo "<script>alert('Update password Successfully');</script>";
        }
        else{ echo "<script>alert('Password didn't Update');</script>"; }  
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
                                <li class="active"><a href="index.php#home">Home</a></li> 
                                <li><a href="events.php">Events</a></li>
                                <li><a href="workshops.php">Workshops</a></li>
                                <li><a href="orders.php">Orders</a></li>
                                <li><a href="profile.php">Profile</a></li> 
                            </ul> 
                            <!-- Get Tickets Button -->
                            <a href="login.php" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Login <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End --> 
      <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row"> 
                <!-- Contact Form -->
                <div class="col-12 col-lg-12">
                    <div class="contact_from_area mb-50 mt-50 clearfix"> 
                        
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            
                            <div class="col-md-6">
                                <form method="post" action='' enctype="multipart/form-data">
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <label>New Password</label>
                                            <input type="password" id="password" placeholder="Password" minlength="6" required class="form-control"/>
                                        </div> 
                                        <div class="col-md-4">
                                            <label>Confirm Password</label>
                                            <input type="password" name="student_pass" id="confirm_password" minlength="6" placeholder="Confirm Password" required class="form-control"/>
                                        </div> 
                                
                                    </div>
                                    <div class="row mt-3"> 
                                        <span id='message'></span>
                                    </div>
                                    <div class="row mt-3"> 
                                        <div class="col-md-4" style="margin-top: 30px;">
                                            <button type="submit" name="btn_submit" class="btn btn-primary">Update Password</button>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

  <? include('footer.php'); ?>
        <script>
            $('#password, #confirm_password').on('keyup', function () {
                if ($('#password').val() == $('#confirm_password').val()) {
                    $('#message').html('Passwords are Matching').css('color', 'green');
                } else 
                    $('#message').html('Passwords are Not Matching').css('color', 'red');
            });
        </script>
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
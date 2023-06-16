<?php
include "admin/includes/config.php";
if(isset($_POST['btn_submit'])){    
    extract($_POST); 
    $rs=mysqli_query($con,"INSERT INTO `student` set `student_email`='$student_email',`student_pass`='$student_pass',student_name='$student_name',`student_college`='$student_college',student_phone='$student_phone'");   
    if($rs){
        echo "<script>alert('Student Details Added Successfully');</script>";
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
                                <li><a href="#home">Home</a></li>
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
                        <h2 class="page-title">Login</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                        <div class="contact_form">
                            <form action="" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="student_name"  placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="student_college" id="name-2" placeholder="College" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="student_email"  placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="student_pass" minlength="6" id="passwordStrength" placeholder="Password" required>
                                            </div> 
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="student_pass" id="cnfmpasswordStrength" minlength="6" onkeyup="return Validate()" placeholder="Confirm Password" required>
                                            </div>  
                                            <span id="wrong_pass_alert"></span>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="tel"  pattern="[0-9]{10}" class="form-control mb-30" name="student_phone" placeholder="Phone Number" required>
                                            </div>  
                                        </div> 
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" name="btn_submit" class="btn confer-btn">Submit<i class="zmdi zmdi-long-arrow-right"></i></button>
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

  <? include('footer.php'); ?>

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
    <script type="text/javascript">
        function Validate() {
            var pass = document.getElementById('passwordStrength').value;
            var confirm_pass = document.getElementById('cnfmpasswordStrength').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Use same password';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        } 
    </script>
         
</body>

</html>
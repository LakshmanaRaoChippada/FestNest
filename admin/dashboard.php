<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);
?> 
<body id="page-top"> 

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <? include "includes/sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <? include "includes/header2.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid"> 
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="areamgmt.php"><img src="images/bankmgmt.png" class="img-fluid" alt="Area Management" /></a><br />
                            <div style="text-align:center;margin-top: 10px;">
                            <a class="btn btn-primary" href="areamgmt.php">Area Management</a> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="tentmgmt.php"><img src="images/hike.jpg" class="img-fluid" alt="Tent" /></a><br />
                            <div style="text-align:center">
                            <a class="btn btn-primary" href="tentmgmt.php">Tent Management</a> 
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- /.container-fluid --> 
            </div>
            <!-- End of Main Content -->

<?  include "includes/footer.php"; ?>
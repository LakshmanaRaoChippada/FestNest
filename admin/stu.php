<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);

if(isset($_POST['btn_submit']) && $_GET['edit']!=''){   
    extract($_POST);    
    $rs=mysqli_query($con,"UPDATE `student` set `student_name`='$student_name', student_pass='$student_pass', student_phone='$student_phone', student_email='$student_email',student_college='$student_college' where `student_id`='".$_GET['edit']."'");   
    if($rs)      echo "<script>alert('Faculty Details Updated Successfully');</script>";

    else echo "<script>alert('Faculty Details not Updated');</script>";
}  
$sql1=mysqli_query($con,"SELECT * from student where `student_id`='".$_GET['edit']."'"); 
$row1=mysqli_fetch_assoc($sql1); 
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
                    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
                    <form method="post" action='' enctype="multipart/form-data">
                    <div class="row"> 
                            <div class="col-md-4">
                                <label>Student Name</label>
                                <input type="text" name="student_name" value="<?=$row1['student_name']?>" required class="form-control"/>
                            </div> 
                            <div class="col-md-4">
                                <label>Student Email</label>
                                <input type="text" name="student_email" required class="form-control" value="<?=$row1['student_email']?>"> 
                            </div>  
                            <div class="col-md-3">
                                <label>Student Password</label>
                                <input type="text" name="student_pass" value="<?=$row1['student_pass']?>" required class="form-control"/>
                            </div> 
                        </div>
                        <div class="row mt-3"> 
                            <div class="col-md-4">
                                <label>Student Phone</label>
                                <input type="text" name="student_phone" value="<?=$row1['student_phone']?>" required class="form-control"/>
                            </div>
                            <div class="col-md-4">
                                <label>Student College</label>
                                <input type="text" name="student_college" value="<?=$row1['student_college']?>" required class="form-control"/>
                            </div>  
                        </div> 
                        <div class="row mt-3"> 
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button type="submit" name="btn_submit" class="btn btn-primary">Edit Student</button>
                            </div>
                        </div> 
                    </form>
                </div>
                <!-- /.container-fluid --> 
            </div>
            <!-- End of Main Content --> 
<?  include "includes/footer.php"; ?>
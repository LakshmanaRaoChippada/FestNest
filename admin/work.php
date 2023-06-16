<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql); 
    if(isset($_POST['btn_submit']) == 'ok'){    
        extract($_POST);  
        if(is_uploaded_file($_FILES['workshop_image']['tmp_name'])){
            $temp=$_FILES['workshop_image']['tmp_name'];
            $file=time()."-".$_FILES['workshop_image']['name'];
            move_uploaded_file($temp,"uploads/events/".$file);  
            $file_sql="`workshop_image`='$file'"; 
        } 
        $rs=mysqli_query($con,"INSERT INTO `workshop` set `workshop_name`='$workshop_name',`workshop_price`='$workshop_price',workshop_info='$workshop_info',$file_sql");   
        if($rs){
            echo "<script>alert('Event Details Added Successfully');</script>";
        }
        else echo "<script>alert('Event Details Not Added');</script>"; 
     
}    
?> 
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
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
                    <h1 class="h3 mb-4 text-gray-800">Add workshop</h1>
                    <form method="post" action='' enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-4">
                                <label>workshop Name</label>
                                <input type="text" name="workshop_name" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>workshop Price</label>
                                <input type="number" name="workshop_price" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>Upload workshop Photo</label>
                                <input type="file" name="workshop_image"> 
                            </div>
                        </div> 
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>workshop Information</label>
                                <textarea name="workshop_info" id="editor1" required class="form-control" placeholder="Event Description"></textarea> 
                            </div>   
                        </div>    
                        <div class="row mt-3"> 
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button type="submit" value="ok" name="btn_submit" class="btn btn-primary">Add workshop</button>
                            </div>
                        </div> 
                    </form>
                </div>
                <!-- /.container-fluid --> 
            </div>
            <script>
                        CKEDITOR.replace( 'editor1' );  
            </script>
<?  include "includes/footer.php"; ?>
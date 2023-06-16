<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php";  
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);  
    if(isset($_POST['btn_submit1'])){  
        extract($_POST);  
        if(is_uploaded_file($_FILES['events_image']['tmp_name'])){
            $temp=$_FILES['events_image']['tmp_name'];
            $file=time()."-".$_FILES['events_image']['name'];
            move_uploaded_file($temp,"uploads/events/".$file);  
            $file_sql="`events_image`='$file'"; 
        }  
         
        $rs=mysqli_query($con,"INSERT INTO `events` set `events_name`='$events_name',`events_price`='$events_price',events_info='$events_info',$file_sql");   
         
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
                    <h1 class="h3 mb-4 text-gray-800">Add Events</h1>
                    <form method="post" action='' enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-4">
                                <label>Events Name</label>
                                <input type="text" name="events_name" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>Events Price</label>
                                <input type="text" name="events_price" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>Upload Events Photo</label>
                                <input type="file" name="events_image"> 
                            </div>
                        </div> 
                        <div class="row mt-3">
                             <div class="col-md-4">
                                <label>Upload Events Video</label>
                                <input type="file" name="events_video"> 
                            </div>
                        </div>
                       
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Events Information</label>
                                <textarea name="events_info" id="editor1" required class="form-control" placeholder="Event Description"></textarea> 
                            </div>   
                        </div>    
                        <div class="row mt-3"> 
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button type="submit" name="btn_submit1" class="btn btn-primary">Add Events</button>
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
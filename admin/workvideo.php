<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php";  
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);  
    if(isset($_POST['btn_submit1'])){  
        extract($_POST);  
        if(is_uploaded_file($_FILES['workshop_video']['tmp_name'])){
            $temp=$_FILES['workshop_video']['tmp_name'];
            $file=time()."-".$_FILES['workshop_video']['name'];
            move_uploaded_file($temp,"uploads/workshop/".$file);  
            $file_sql="`workshop_video`='$file'"; 
        }   
        $rs=mysqli_query($con,"UPDATE `workshop` set $file_sql where workshop_id='$workshop_id'");    
        if($rs){
            echo "<script>alert('Event Details Added Successfully');</script>";
        }
        else echo "<script>alert('Event Details Not Added');</script>"; 
     
}    
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
                    <h1 class="h3 mb-4 text-gray-800">Add workshop</h1>
                    <form method="post" action='' enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-4">
                                <label>workshop Name</label>
                                <select class="form-control" name="workshop_id" required>
                                    <option value='' disabled selected>Select Workshop</option>
                                    <?  
                                        $rrr=mysqli_query($con,"SELECT * FROM `workshop` ORDER BY workshop_id ASC"); 
                                        while($r1=mysqli_fetch_assoc($rrr)){ ?>
                                            <option value="<?=$r1['workshop_id']?>"><?=$r1['workshop_name']?></option>
                                    <? }  
                                    ?>
                                </select>   
                            </div>  
                        </div> 
                        <div class="row mt-3">
                             <div class="col-md-4">
                                <label>Upload workshop Video</label>
                                <input type="file" name="workshop_video"> 
                            </div>
                        </div> 
                        <div class="row mt-3"> 
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button type="submit" name="btn_submit1" class="btn btn-primary">Add workshop Video</button>
                            </div>
                        </div> 
                    </form>
                </div>
                <!-- /.container-fluid --> 
            </div>
             
<?  include "includes/footer.php"; ?>
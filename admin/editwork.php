<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql); 
    if(isset($_POST['btn_submit']) == 'ok' && $_GET['edit']!=''){    
        extract($_POST);  
        if(is_uploaded_file($_FILES['workshop_image']['tmp_name']) && !empty($_FILES['workshop_image']['tmp_name'])){
            $temp=$_FILES['workshop_image']['tmp_name'];
            $file=time()."-".$_FILES['workshop_image']['name'];
            move_uploaded_file($temp,"uploads/workshop/".$file);  
            $file_sql=$file; ; 
        } 
        if($file_sql!='') $sql1.=" workshop_image='$file_sql', ";  
        $rs=mysqli_query($con,"UPDATE `workshop` set `workshop_name`='$workshop_name',$sql1 workshop_info='$workshop_info',`workshop_price`='$workshop_price' where `workshop_id`='".$_GET['edit']."'");   
        if($rs){
            echo "<script>alert('Event Details Updated Successfully');</script>";
        }
        else echo "<script>alert('Event Details Not Updated');</script>"; 
     
}    
$sql1=mysqli_query($con,"SELECT * from `workshop` where `workshop_id`='".$_GET['edit']."'"); 
$row1=mysqli_fetch_assoc($sql1); 
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
                    <h1 class="h3 mb-4 text-gray-800">Edit workshop</h1>
                    <form method="post" action='' enctype="multipart/form-data">
                        <div class="row"> 
                            <div class="col-md-4">
                                <label>Workshop Name</label>
                                <input type="text" name="workshop_name" value="<?=$row1['workshop_name']?>" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>Workshop Price</label>
                                <input type="number" name="workshop_price" value="<?=$row1['workshop_price']?>" required class="form-control"/>
                            </div>  
                            <div class="col-md-4">
                                <label>Upload Workshop Photo</label>
                                <input type="file" name="workshop_image"> <br/>
                                <img src="uploads/workshop/<?=$row1['workshop_image']?>" class="img-fluid">
                            </div>
                        </div> 
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>workshop Information</label>
                                <textarea name="workshop_info" id="editor1" required class="form-control" placeholder="Event Description"><?=$row1['workshop_info']?></textarea> 
                            </div>   
                        </div>    
                        <div class="row mt-3"> 
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button type="submit" value="ok" name="btn_submit" class="btn btn-primary">Edit workshop</button>
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
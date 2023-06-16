<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);
if(isset($_GET['del']) ){
    $result6=mysqli_query($con,"DELETE from `student` where `student_id`='".$_GET['del']."'");   
}
if(isset($_GET['show']) ){
    $result6=mysqli_query($con,"UPDATE `student` set `student_status`=1 where `student_id`='".$_GET['show']."'");
    }   
  if(isset($_GET['hide']) ){  
    $result6=mysqli_query($con,"UPDATE `student` set `student_status`=0 where `student_id`='".$_GET['hide']."'");
  } 
?> 
<style>
    #dataTable_filter {
	float: right;
}
    </style>
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
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Name</th> 
                                            <th>Password</th> 
                                            <th>Email</th>  
                                            <th>College</th>
                                            <th>Phone Number</th>
                                            <th>Hide/ Show</th> 
                                            <th>Edit</th>
                                            <th>Delete</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?    
                                        $result=$con->query("SELECT * FROM `student` ORDER BY `student_id` ASC");  
                                        $j=1;
                                        while($row1 = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $j++; ?></td> 
                                            <td><?=$row1['student_name']?></td>    
                                            <td><?=$row1['student_pass']?></td> 
                                            <td><?=$row1['student_email']?></td>  
                                            <td><?=$row1['student_college']?></td> 
                                            <td><?=$row1['student_phone']?></td> 
                                            <td>
                                                <? if($row1['student_status']==0){ ?>
                                                    <a class="btn btn-secondary" style="color: #fff;background-color: #6c757d;border-color: #6c757d;" href="students.php?show=<?=$row1['student_id']?>">Show</a>
                                                     <? 
                                                    }   
                                                    else { ?>  
                                                    <a class="btn btn-primary" href="students.php?hide=<?=$row1['student_id']?>">Hide</a>
                                                        <?  } ?> 
                                            </td> 
                                            <td><a class="btn btn-warning" href="stu.php?edit=<?=$row1['student_id']?>">Edit</a></td>  
                                            <td><a class="btn btn-danger" href="students.php?del=<?=$row1['student_id']?>">Delete</a></td> 
                                        </tr>
                                        <? } ?>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid --> 
            </div>
            <!-- End of Main Content -->

<?  include "includes/footer.php"; ?>
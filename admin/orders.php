<?
include 'includes/auth.php';
include 'includes/header.php';
include "includes/config.php"; 
$sql=mysqli_query($con,"SELECT * from admin");
$row=mysqli_fetch_assoc($sql);
if(isset($_GET['del']) ){
    $result6=mysqli_query($con,"DELETE from `orders` where `orders_id`='".$_GET['del']."'");   
}
if(isset($_GET['show']) ){
    $result6=mysqli_query($con,"UPDATE `orders` set `orders_status`=1 where `orders_id`='".$_GET['show']."'");
    }   
  if(isset($_GET['hide']) ){  
    $result6=mysqli_query($con,"UPDATE `orders` set `orders_status`=0 where `orders_id`='".$_GET['hide']."'");
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
                                            <th>Student Name</th> 
                                            <th>Transaction Number</th>  
                                            <th>Type</th>
                                            <th>Transaction Image</th>
                                            <th>Approve/refuse</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?    
                                        $result=$con->query("SELECT * FROM `orders` ORDER BY `orders_id` ASC");  
                                        $j=1;
                                        while($row1 = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $j++; ?></td> 
                                            <td><?=$row1['orders_name']?></td>    
                                            <td><?=$row1['orders_student']?></td> 
                                            <td><?=$row1['orders_txnno']?></td>   
                                            <td><?=$row1['orders_type']?></td> 
                                            <td><a href="uploads/orders/<?=$row1['orders_image']?>" target="_blank"><img src="uploads/orders/<?=$row1['orders_image']?>" style="height:150px;width:150px"></a></td>  
                                            <td>
                                                <? if($row1['orders_status']==0){ ?>
                                                    <a class="btn btn-secondary" style="color: #fff;background-color: #6c757d;border-color: #6c757d;" href="orders.php?show=<?=$row1['orders_id']?>">Show</a>
                                                     <? 
                                                    }   
                                                    else { ?>  
                                                    <a class="btn btn-primary" href="orders.php?hide=<?=$row1['orders_id']?>">Hide</a>
                                                        <?  } ?> 
                                            </td> 
                                            
                                           
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
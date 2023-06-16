<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Festnest Admin</div>
    </a>  
    <!-- Divider -->
    <hr class="sidebar-divider my-0"> 
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link active" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       
    </div> 
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsevendor"
            aria-expanded="true" aria-controls="collapsevendor">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Events</span>
        </a>
        <div id="collapsevendor" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded"> 
                <a class="collapse-item" href="event.php">Add Events</a>
                <a class="collapse-item" href="eventmgmt.php">Manage Events</a> 
                <a class="collapse-item" href="eventvideo.php">Video Events</a>  
            </div>
        </div>
    </li> 
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#work"
            aria-expanded="true" aria-controls="work">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Workshop</span>
        </a>
        <div id="work" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded"> 
                <a class="collapse-item" href="work.php">Add Workshop</a>
                <a class="collapse-item" href="workmgmt.php">Manage Workshop</a> 
                <a class="collapse-item" href="workvideo.php">Video work</a>  
            </div>
        </div>
    </li> 
    <hr class="sidebar-divider">  
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#boss"
            aria-expanded="true" aria-controls="boss">
            <i class="fas fa-location-arrow"></i>
            <span>Student</span>
        </a>
        <div id="boss" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">   
                <a class="collapse-item" href="students.php">Student Management</a> 
            </div>
        </div>
    </li> 
    <hr class="sidebar-divider">  
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orders"
            aria-expanded="true" aria-controls="orders">
            <i class="fas fa-location-arrow"></i>
            <span>Orders</span>
        </a>
        <div id="orders" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">   
                <a class="collapse-item" href="orders.php">Orders Management</a> 
            </div>
        </div>
    </li>    
</ul>
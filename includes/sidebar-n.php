<nav id="sidebar" class="position-sticky d-lg-block sidebar">
    <div class="list-group list-group-flush mx-2 mt-2">
        <div class="sidebar-header">
            <a href="/vmsp/index_1.php"><img src="/vmsp/images/logo.png" width="180" alt="logo"></a>
        </div>

        <ul class="list-unstyled components">
            <li class="sidenav-item">
                <a class="py-2 ripple tooltip-tip ajax-load" href="/vmsp/index_1.php" title="Home">
                    <i class="fa-solid fa-house me-2"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidenav-item">
                <a class="py-2 ripple" href="/vmsp/dashboard.php" title="Home">
                    <i class="fas fa-tachometer-alt fa-fw me-2"></i>Dashboard</a>
                </a>
            </li>
            <li class="dp1 active">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle py-2 ripple">
                    <i class="fa-solid fa-users me-2"></i>Employee</a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/emp_insert_0.php" title="Add">
                            <i class="fa-solid fa-user-plus me-2"></i>Add</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/emp_display_0.php" title="View">
                            <i class="fa-solid fa-users-viewfinder me-2"></i>View All</a>
                    </li>
                    <!-- <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/emp_edit1_0.php" title="Edit">
                            <i class="fa-solid fa-user-pen me-2"></i>Edit</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/emp_delete1_0.php" title="Delete">
                            <i class="fa-solid fa-trash-can me-2"></i>Delete</a>
                    </li> -->
                </ul>
            </li>
            <li class="dp2">
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle py-2 ripple">
                <i class="fa-solid fa-layer-group me-2"></i></i>Department</a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/department_0.php" title="Add">
                            <i class="fa-solid fa-user-plus me-2"></i>Add</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/department_display_0.php" title="View">
                            <i class="fa-solid fa-users-viewfinder me-2"></i>View All</a>
                    </li>
                    <!-- <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/department_delete_0.php" title="Delete">
                            <i class="fa-solid fa-trash-can me-2"></i>Delete</a>
                    </li> -->
                </ul>
            </li>
            <li class="dp3">
                <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle py-2 ripple">
                <i class="fa-solid fa-toolbox me-2"></i></i>Admin Users</a>
                <ul class="collapse list-unstyled" id="homeSubmenu3">
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/admin_user_0.php" title="Add">
                            <i class="fa-solid fa-user-plus me-2"></i>Add</a>
                    </li>
                    <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/admin_display_0.php" title="View">
                            <i class="fa-solid fa-users-viewfinder me-2"></i>View All</a>
                    </li>
                    <!-- <li>
                        <a class="list-group-item list-group-item-action py-2 ripple" href="/vmsp/php/admin_delete_0.php" title="Delete">
                            <i class="fa-solid fa-trash-can me-2"></i>Delete</a>
                    </li> -->
                </ul>
            </li>
            <li class="sidenav-item">
                <a class="py-2 ripple" href="/vmsp/php/report_0.php" title="Home">
                <i class="fa-solid fa-camera-retro me-2"></i></i>Report</a>
                </a>
            </li>
            
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="/vmsp/php/logout.php?log" title="Log out" class="btn btn-danger btn-block">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>
<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav id="sidebar" class="position-sticky d-lg-block sidebar" style="background-color:#0033a0;">
    <div class="list-group list-group-flush mx-2 mt-2">
    <div class="sidebar-header">
            <a href="/gpms/dashboard.php"><img src="/gpms/images/logo.png" width="180" alt="logo"></a>
        </div>

        <ul class="list-unstyled components">
        <li class="sidenav-item">
                <a class="py-2 ripple" href="/gpms/index_1.php" >
                    <i class="fa-solid fa-house me-2"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li>
            <li class="sidenav-item <?= ($activePage == 'dashboard') ? 'active' : ''; ?>">
                <a class="py-2 ripple" href="/gpms/dashboard.php" >
                    <i class="fas fa-tachometer-alt fa-fw me-2"></i>Dashboard</a>
                </a>
            </li>
            <li class="sidenav-item <?= ($activePage == 'pass_phone') ? 'active' : ''; ?>">
                <a class="py-2 ripple" href="/gpms/php/pass_phone.php" >
                    <i class="fa-regular fa-id-card me-2"></i>Create Pass </a>
                </a>
            </li>
            <li class="sidenav-item <?= ($activePage == 'material_pass_display') ? 'active':''; ?>">
                <a class="py-2 ripple" href="/gpms/php/material_pass_display.php" >
                    <i class="fa-regular fa-id-card me-2"></i>View Material Passes</a>
                </a>
            </li>
            <li class="sidenav-item <?= ($activePage == 'activevisitors') ? 'active' : ''; ?>">
                <a class="py-2 ripple" href="/gpms/php/activevisitors.php" >
                    <i class="fa-solid fa-earth-americas me-2"></i>Active Visitors</a>
                </a>
            </li>
            <!-- <li class="sidenav-item <?= ($activePage == 'checkout_0') ? 'active' : ''; ?>">
                <a class="py-2 ripple" href="/gpms/php/out_time.php" >
                    <i class="fa-solid fa-right-from-bracket me-2"></i>Out Time</a>
                </a>
            </li> -->
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="/gpms/php/logout.php?log" title="Log out" class="btn btn-danger btn-block">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>
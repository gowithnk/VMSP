<?php
session_start();
if ($_SESSION['user'] == "") {
    header('location:index.html');
}

include('../php/dbconn.php');
$user = $_SESSION['user'];

$sql = "select * from login_user where username='$user'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
// user avatar
$avatar = $fetch[6];
if (empty($avatar)) $avatar = 'avatar.png';
?>
<nav class="navbar navbar-expand-lg " style="background-color: #189ADB;color:#fff;">
    <!-- Container wrapper -->
    <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fas fa-align-left"></i>
        <span></span>
    </button>
    <div class="container-fluid">
        <!-- Toggle button -->
        <!-- <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button> -->


        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-3">
                <li class="nav-item">
                    <div class="date-top">
                        <span class="entypo-calendar" style="margin-right:5px"></span>
                        <span id="Date"></span>
                        <span id="digital-clock" class="digital">
                            <span class="entypo-clock" style="margin-right:5px"></span>
                            <span class="hour"></span>
                            <span>:</span>
                            <span class="min"></span>
                            <span>:</span>
                            <span class="sec"></span>
                            <span class="meridiem"></span>
                        </span>
                    </div>
                    
                </li>
            </ul>
            <!-- Notifications -->
            <div class="dropdown">
                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img alt="" class="admin-pic img-circle" src="<?php echo '/vms/images/' . $avatar; ?>">
                    <?php echo $fetch['name'] ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<script>
    var gauge4 = new Gauge("canvas4", {
        'mode': 'needle',
        'range': {
            'min': 0,
            'max': 90
        }
    });
    gauge4.draw(Math.floor(Math.random() * 90));
    var run = setInterval(function() {
        gauge4.draw(Math.floor(Math.random() * 90));
    }, 3500);
</script>

<script type="text/javascript">
    var output, started, duration, desired;

    // Constants
    duration = 5000;
    desired = '50';

    // Initial setup
    output = $('#speed');
    started = new Date().getTime();

    // Animate!
    animationTimer = setInterval(function() {
        // If the value is what we want, stop animating
        // or if the duration has been exceeded, stop animating
        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 60)

            );

        } else {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 120)

            );
        }
    }, 5000);

    $('#getting-started').countdown('2015/01/01', function(event) {
        $(this).html(event.strftime(

            '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
    });
</script>
<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:/vmsp/index.html');
    die();
}

include('php/dbconn.php');
$user = $_SESSION['ROLE'];
$sql = "SELECT * FROM login_user WHERE user='$user'";
$query = mysqli_query($db, $sql);
$fetch5 = mysqli_fetch_array($query);
// user avatar
$avatar = $fetch5[6];
if (empty($avatar)) $avatar = 'avatar.png';
// badge data
$sql = "SELECT * FROM inquery WHERE status='0'";
$query = mysqli_query($db, $sql);
$fetch3 = mysqli_num_rows($query);
// Notifications
$date = date("Y-m-d");
$sql = "SELECT * FROM inquery WHERE Date='$date' ORDER BY Name DESC";
$query = mysqli_query($db, $sql);
$fetch4 = mysqli_num_rows($query);  
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#0033a0;color:#fff;">
    <!-- Container wrapper -->
    <button type="button" id="sidebarCollapse" class="btn btn-info">
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
            <?php
            // echo ($notif_time);
            ?>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 me-3">
                <li class="nav-item ml-2 mb-0">
                    <div class="date-top" style="font-size:12px;">
                        <span class="entypo-calendar" style="margin-right:5px"></span>
                        <span id="Date"></span><br>
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
                    <span class="badge rounded-pill badge-notification bg-danger"><?php echo $fetch3; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    include('php/dbconn.php');
                    
                    if(($fetch4)==0){
                        echo '<li><a class="dropdown-item" href="#">Nothing to show</a></li>';
                    }
                    while ($fetch4 = mysqli_fetch_array($query)) {
                    ?>
                        <li><a class="dropdown-item" href="#">
                                <?php echo 'New visitor Added ' . '<span class="badge badge-success py-1 px-2">'
                                 . $fetch4[1] . '</span>'; ?>
                            </a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" 
                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img alt="" class="admin-pic img-circle" src="<?php echo '/vmsp/images/' . $avatar; ?>">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#"><?php echo $fetch5['name'] ?></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/vmsp/php/logout.php?log" title="Log out">
                            <i class="icon-chevron-right"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- jQuery CDN - minified version  -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" 
crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#navbarDropdownMenuLink').on("click", function() {
            $.ajax({
                url: "../php/notif-reset.php",
                success: function(query) {
                    // console.log(query);
                }
            });
        });
    });
</script>
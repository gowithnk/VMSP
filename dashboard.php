<?php

include('php/dbconn.php');

$sql = "SELECT * FROM inquery";
if ($fetch = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $totalVisitor = mysqli_num_rows($fetch);
    // Display result
}

$sql = "Select count(*) from emp_table";
$query = mysqli_query($db, $sql);
$fetch1 = mysqli_fetch_array($query);

$sql = "Select count(*) from department";
$query = mysqli_query($db, $sql);
$fetch2 = mysqli_fetch_array($query);

// Active Visitors 
$sql = "SELECT * FROM inquery WHERE Out_Time IS NULL OR Out_Time = '' ";
if ($query = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($query);
    // Display result
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMSP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Niranjan">

    <link rel="stylesheet" href="assets/css/loader-style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/js/progress-bar/number-pb.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/ico/minus.png">

</head>

<body>
    <!-- Navbar -->
    <?php include('topbar.php'); ?>
    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <?php include('sidebar_h.php'); ?>
    <!-- END OF SIDE MENU -->

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <!-- center page-->
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span><i class="maki-ferry"></i> Total Visitors</span>
                                </h3>
                                <div class="titleClose">
                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span><?php echo $totalVisitor; ?></span>
                                </div>
                            </div>

                            <div class="active_users">
                                <div class="bar">
                                    <p class="au_title">Active Visitors: <span class="au_number"><?php echo $rowcount; ?></span></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="maki-ferry"></i> Total Employees</span>
                                </h3>
                                <div class="titleClose">

                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span><?php echo $fetch1[0] ?></span>
                                </div>
                            </div>
                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="maki-ferry"></i> Total Departments</span>
                                </h3>
                                <div class="titleClose">

                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span><?php echo $fetch2[0] ?></span>
                                </div>
                            </div>

                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active visitors -->
                <div class="active_visitors">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <?php include('php/active_visitors.php') ?>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include('footer.php') ?>
        <!-- end of footer -->
    </div>
    <!-- /END OF CONTENT -->
    <!--  END OF PAPER WRAP -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script>
    <script src="assets/js/progress-bar/number-pb.js"></script>
    <script src="assets/js/progress-bar/progress-app.js"></script>

    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>
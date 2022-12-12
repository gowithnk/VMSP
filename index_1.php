<?php 
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] !== 'admin'){
    echo "<script>
            location.href='../dashboard.php';
        </script>";
        die();
}
include('php/dbconn.php');

$sql = "Select count(*) from inquery";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);

$sql = "Select count(*) from emp_table";
$query = mysqli_query($db, $sql);
$fetch1 = mysqli_fetch_array($query);

$sql = "Select count(*) from department";
$query = mysqli_query($db, $sql);
$fetch2 = mysqli_fetch_array($query);

$sql = "Select count(*) from material_pass";
$query = mysqli_query($db, $sql);
$totalM = mysqli_fetch_array($query);


// Active Visitors 
$sql = "SELECT * FROM inquery WHERE Out_Time IS NULL OR Out_Time = '' ";
if ($result = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcountV = mysqli_num_rows($result);
}
// Todays Material Passses 
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$sql = "SELECT * FROM material_pass WHERE date='$date' ";
if ($result2 = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcountM = mysqli_num_rows($result2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMSP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
</head>

<body>
    <!-- TOP MENU -->
    <?php include('includes/header-n.php'); ?>
    <div class="wrapper">
        <!-- Navbar -->
        <?php if(isset($_SESSION['ROLE']) && $_SESSION['ROLE'] !== 'admin'){
    echo "<script>
            location.href='/vmsp/dashboard.php';
        </script>";
        die();
} ?>
        <?php include('includes/sidebar-n.php'); ?>

        <div class="content">
                <div class="row m-1">
                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="card">
                            <div class="d-flex justify-content-center text-light p-2 bg-primary">
                                <i class="fas fa-walking me-2"></i> TOTAL VISITORS
                            </div>
                            <div class="d-flex justify-content-center p-2">
                                <span class="display-1 text-danger"><?php echo $fetch[0] ?></span>
                            </div>
                            <div class="note-dark p-2"><a href="php/activevisitors.php">
                                <p class="display-7 text-light">Active Visitors: 
                                <span class="badge badge-success fs-5" style="margin-left: 5px;"><?php echo $rowcountV; ?></span>
                                </p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="card">
                            <div class="d-flex justify-content-center text-light p-2 bg-primary">
                            <i class="fa-solid fa-business-time me-2"></i> TOTAL EMPLOYEES
                            </div>
                            <div class="d-flex justify-content-center p-2">
                                <span class="display-1 text-danger"><?php echo $fetch1[0] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="card">
                            <div class="d-flex justify-content-center text-light p-2 bg-primary">
                            <i class="fa-solid fa-puzzle-piece me-2"></i> TOTAL DEPARTMENTS
                            </div>  
                            <div class="d-flex justify-content-center p-2">
                                <span class="display-1 text-danger"><?php echo $fetch2[0] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-2">
                        <div class="card">
                            <div class="d-flex justify-content-center text-light p-2 bg-primary">
                            <i class="fa-solid fa-business-time me-2"></i> TOTAL MATERIAL PASSES
                            </div>
                            <div class="d-flex justify-content-center p-2">
                                <span class="display-1 text-danger"><?php echo $totalM[0] ?></span>
                            </div>
                            <div class="note-dark p-2"><a href="/vmsp/php/material_pass_display.php">
                                <p class="display-7 text-light">Tadays Material passes: 
                                <span class="badge badge-success fs-5" style="margin-left: 5px;"><?php echo $rowcountM; ?></span>
                                </p></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include('footer.php') ?>
    <!--  END OF WRAP -->

    <!-- jQuery CDN - minified version  -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" 
    crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
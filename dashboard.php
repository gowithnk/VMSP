<?php
// if( isset($_SESSION["user"]) && $_SESSION["user"] != 'niranjan' ){  
//     header('location:dashboard.php'); 
//     } 
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

// Active Visitors 
$sql = "SELECT * FROM inquery WHERE Out_Time IS NULL OR Out_Time = '' ";
if ($result = mysqli_query($db, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    // Display result
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMSP - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- databatle -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
</head>

<body>
    <!-- TOP MENU -->
    <?php include('includes/header-n.php'); ?>
    <!-- END OF TOP MENU -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('includes/sidebar-u.php'); ?>
        <!-- /END OF TOP NAVBAR -->

        <div class="content p-3">
            <div class="row mb-2">
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
                                    <span class="badge badge-success fs-5" style="margin-left: 5px;"><?php echo $rowcount; ?></span>
                                </p>
                            </a>
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
            </div>
            <!-- Active visitors -->
            <div class="active_visitors">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <?php include('php/active_visitors.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include('footer.php') ?>
    <!-- / END OF FOOTER -->

    <!-- jQuery CDN - minified version  -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dtDash').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print'
                ]
                // ,"lengthMenu": [ 10, 25, 50, 75, 100 ]
            });
        });
    </script>
</body>

</html>
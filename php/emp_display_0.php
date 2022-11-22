<?php
include('dbconn.php');
$sql = "Select count(*) from inquery";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>

<?php
include('dbconn.php');
$sql = "Select count(*) from emp_table";
$query = mysqli_query($db, $sql);
$fetch1 = mysqli_fetch_array($query);
?>

<?php
include('dbconn.php');
$sql = "Select count(*) from department";
$query = mysqli_query($db, $sql);
$fetch2 = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VMSP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
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
    <!-- databatle -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/styles.nk.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/js/progress-bar/number-pb.css">
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>
<body>
    <!-- Navbar -->
    <?php  include('../topbar.php'); ?>
    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <?php include('../sidebar_1.php'); ?>
    <!-- END OF SIDE MENU -->

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="card py-3 px-3 mb-6 table-responsive" style='align-items: center;'>
                            <?php include('emp_display.php') ?>
                        </div>
                    </div>
                </div>
            </div>
             <!-- FOOTER -->
            <?php include('../footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->

    <!-- jQuery CDN - minified version  -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script>
    <script src="assets/js/progress-bar/number-pb.js"></script>
    <script src="assets/js/progress-bar/progress-app.js"></script>
    
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
    <script type="text/javascript">
        //  $(document).ready(function() {
        //     $('#dtEmp').DataTable( {
        //         dom: 'Bfrtip',
        //         lengthChange: false,
        //         buttons: [ 'copy', 'csv', 'excel', 'print', 'colvis' ],
        //         // ,"lengthMenu": [ 10, 25, 50, 75, 100 ]
        //     } );
        // } );
        $(document).ready(function() {
            var table = $('#dtEmp').DataTable( {
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [ 'copy', 'csv', 'excel', 'print', 'colvis' ],
                responsive: true
            } );
        
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>

    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <!-- GAGE -->

    <script src="assets/js/jhere-custom.js"></script>



   
</body>
</html>
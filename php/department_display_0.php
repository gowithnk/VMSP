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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- databatle -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/js/progress-bar/number-pb.css">
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
    <!-- Navbar -->
    <?php include('../topbar.php'); ?>
    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <?php include('../sidebar_1.php'); ?>
    <!-- END OF SIDE MENU -->

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-lg-6 col-md-4 col-sm-12 card mb-6 py-3">
                        <h2>Departments</h2>
                        <?php include('department_display.php') ?>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <!-- FOOTER -->
            <?php include('../footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
    </div>
    <!--  END OF PAPER WRAP -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script>
    <script src="assets/js/progress-bar/number-pb.js"></script>
    <script src="assets/js/progress-bar/progress-app.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dtDepD').DataTable({
                "lengthMenu": [10, 25, 50, 75, 100]
            });
        });
    </script>
    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <!-- GAGE -->

    <script src="assets/js/jhere-custom.js"></script>

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
        /* Javascript
         *
         * See http://jhere.net/docs.html for full documentation
         */
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
    </script>
    <script type="text/javascript">
        $('#getting-started').countdown('2015/01/01', function(event) {
            $(this).html(event.strftime(

                '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
        });
    </script>

</body>

</html>
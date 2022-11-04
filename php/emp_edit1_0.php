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
    <title>VMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/js/progress-bar/number-pb.css">

    <style type="text/css">
        canvas#canvas4 {
            position: relative;
            top: 20px;
        }

        .edit_data {
            padding: 3px 8px;
            background-color: #f9e3bb;
            color: #000000;
            border-radius: 3px;
        }

        .delete_data {
            padding: 3px 8px;
            background-color: #eb4a4a;
            color: #000000;
            border-radius: 3px;
        }
        body {
			text-align: center;
			background-size: cover;
			background-repeat: no-repeat;
		}

		table {

			border-collapse: collapse;
			border: none;
		}

		td {
			text-align: center;
			height: 50px;
			width: 150px;
			color: white;
		}

		img {
			border: none;
		}

		th {
			font-family: verdana;
			font-size: 16px;
			color: skyblue;
			padding: 5px;
		}
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Fav and touch icons -->
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
                    <div class="col-sm-12" style="overflow: auto; height:500px;">
                        <!-- center page-->
                        <?php include('emp_edit1.php') ?>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <?php include('../footer.php') ?>
            <!-- / END OF FOOTER -->
        </div>
        <!-- /END OF CONTENT -->  
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- RIGHT SLIDER CONTENT -->
    <!-- END OF RIGHT SLIDER CONTENT-->

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
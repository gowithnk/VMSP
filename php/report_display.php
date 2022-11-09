<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VMSP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/styles.nk.css">
    <!-- fab-icon -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
    <script type="text/javascript">
	function print11() {
		window.print();
	}
</script>
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
                        <div class="card">
                            <?php include('report.php') ?>

                            <form action="#" style="margin-top:10px;">
                                <input class="btn btn-warning" type="button" id="p1" value="Print All" onclick="print1()" 
                                style="width:200px; margin-top:10px;">
                                <a class="btn btn-info" href="report_0.php" id="p2" style="width:200px; margin-top:10px;">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include('../footer.php') ?>
            <!-- / END OF FOOTER -->
    </div>
    <!--  END OF PAPER WRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <!-- print settings -->
    <script type="text/javascript">
	function print1() {
		w = document.getElementById('p1');
		w.style.display = 'none';
		w1 = document.getElementById('p2');
		w1.style.display = 'none';
		window.print();
		w.style.display = 'block';
		w1.style.display = 'block';
	}
</script>
</body>
</html>
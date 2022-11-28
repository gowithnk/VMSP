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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="assets/ico/minus.png">
  
</head>

<body>
    <!-- Navbar -->
    <?php include('includes/header-n.php'); ?>

    <!--  PAPER WRAP -->
    <div class="wrapper">

    <!-- SIDE MENU -->
    <?php include('includes/sidebar-n.php'); ?>

        <div class="content container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card p-3">
                            <?php include('admin_user.php') ?>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- FOOTER -->
    <?php include('../footer.php') ?>
    
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>
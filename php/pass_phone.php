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
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />

</head>

<body>
    <!-- TOP MENU -->
    <?php include('includes/header-n.php'); ?>
    <!-- END OF TOP MENU -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('includes/sidebar-u.php'); ?>
        <!-- /END OF TOP NAVBAR -->

        <div class="content">
            <div class="col-12">
                <div class="card p-2 mt-3">
                    <div class="text-center">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3 mt-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active ripple" id="tab-visitor" data-mdb-toggle="pill" href="#pills-visitor" role="tab" aria-controls="pills-visitor" aria-selected="true"><i class="fa-solid fa-users-gear me-2"></i>Visitor Management</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link ripple" id="tab-material" data-mdb-toggle="pill" href="#pills-material" role="tab" aria-controls="pills-material" aria-selected="false"><i class="fa-solid fa-truck-fast me-2"></i>Material Management</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link ripple" id="tab-Emp" data-mdb-toggle="pill" href="#pills-Emp" role="tab" aria-controls="pills-Emp" aria-selected="false"><i class="fa-regular fa-address-card me-2"></i>Employee Pass</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active px-2" id="pills-visitor" role="tabpanel" aria-labelledby="tab-visitor">
                                <form method="post" action="pass.php">
                                    <!-- Email input -->
                                    <div class="form-outline mb-2">
                                        <input required type="tel" id="phone" name="phone" title="Please enter exactly 10 digits" onkeypress="phoneno()" maxlength="10" class="form-control" required />
                                        <label class="form-label" for="phone">Phone Number</label>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
                                </form>
                            </div>
                            <div class="tab-pane fade px-2" id="pills-material" role="tabpanel" aria-labelledby="tab-material">
                                <form>

                                    <!-- Name input -->
                                    <div class="form-outline mb-2">
                                        <input type="text" id="registerName" class="form-control" />
                                        <label class="form-label" for="registerName">Name</label>
                                    </div>

                                    <!-- Username input -->
                                    <div class="form-outline mb-2">
                                        <input type="text" id="registerUsername" class="form-control" />
                                        <label class="form-label" for="registerUsername">Username</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-2">
                                        <input type="email" id="registerEmail" class="form-control" />
                                        <label class="form-label" for="registerEmail">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-2">
                                        <input type="password" id="registerPassword" class="form-control" />
                                        <label class="form-label" for="registerPassword">Password</label>
                                    </div>

                                    <!-- Repeat Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="registerRepeatPassword" class="form-control" />
                                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
                                </form>
                            </div>
                            <div class="tab-pane fade px-2" id="pills-Emp" role="tabpanel" aria-labelledby="tab-Emp">
                                <form>
                                    <!-- Email input -->
                                    <div class="form-outline mb-2">
                                        <input required type="tel" id="mobile" class="form-control" required />
                                        <label class="form-label" for="mobile">Phone Number 2</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
                                </form>
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END OF WRAP -->

    <!-- FOOTER -->
    <?php include('../footer.php') ?>
    <!-- / END OF FOOTER -->

    <!-- jQuery CDN - minified version  -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
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
    <script>
        function phoneno() {
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k) >= 0))
                    e.preventDefault();
            });
        }
    </script>
</body>
</html>
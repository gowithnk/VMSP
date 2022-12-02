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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />
    <style>
        @media only screen and (min-width: 992px) {
            .input-group {
                width: 50%;
            }
        }
.qty{
    width: 200px;
}
    </style>
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
                        <!-- Tabs navs -->
                        <ul class="nav nav-pills nav-justified mb-3 mt-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active ripple" id="tab-visitor" data-mdb-toggle="pill" href="#pills-visitor" role="tab" aria-controls="pills-visitor" aria-selected="true"><i class="fa-solid fa-users-gear me-2"></i>Visitor Management</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link ripple" title="" id="tab-material" data-mdb-toggle="pill" href="#pills-material" role="tab" aria-controls="pills-material" aria-selected="false"><i class="fa-solid fa-truck-fast me-2"></i>Material Management</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link ripple" id="tab-Emp" data-mdb-toggle="pill" href="#pills-Emp" role="tab" aria-controls="pills-Emp" aria-selected="false"><i class="fa-regular fa-address-card me-2"></i>Employee Pass</a>
                            </li>
                        </ul>
                        <!-- Tabs navs end -->

                        <!-- Tabs content -->
                        <div class="tab-content">
                            <!-- visitor pass -->
                            <div class="tab-pane fade show active px-2" id="pills-visitor" role="tabpanel" aria-labelledby="tab-visitor">
                                <form method="post" action="pass.php" class="needs-validation" novalidate>
                                    <div class="form-outline mb-2">
                                        <input required type="tel" id="phone" name="phone" title="Please enter exactly 10 digits" 
                                        onkeypress="phoneno()" pattern=".{10}" maxlength="10" class="form-control" required />
                                        <label class="form-label" for="phone">Phone Number</label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
                                </form>
                            </div>
                            <!-- visitor pass end -->
                            <!-- Material entery -->
                            <div class="tab-pane fade px-2" id="pills-material" role="tabpanel" aria-labelledby="tab-material">
                                <form action="material_insert.php" method="post" class="needs-validation" novalidate>
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <select name="fromLocation" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>From Location</option>
                                                <option value="Corporate Office">Corporate Office</option>
                                                <option value="Registered Office">Registered Office</option>
                                                <option value="Plant I">Plant I</option>
                                                <option value="Plant II">Plant II</option>
                                                <option value="Plant III">Plant III</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 input-group">
                                            <select name="toLocation" id="slt" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>To Location</option>
                                                <option value="Corporate Office">Corporate Office</option>
                                                <option value="Registered Office">Registered Office</option>
                                                <option value="Plant I">Plant I</option>
                                                <option value="Plant II">Plant II</option>
                                                <option value="Plant III">Plant III</option>
                                            </select>
                                            <div style="display: none;" id="otherLocation1" class="form-outline mb-2">
                                                <input name="toLocation" disabled type="otherLocation" id="otherLocation" class="form-control" required/>
                                                <label class="form-label" for="otherLocation">Other Location</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-lg-none d-xl-none">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <input class="form-check-input mb-2" checked name="group1" id="dummy" type="radio" 
                                                onclick="toggleRadio(false)" />Select Location
                                                <input class="form-check-input ml-2 mb-2" name="group1" id="customMessageRadioButton" 
                                                onclick="toggleRadio(true)" type="radio" />Other Location
                                            </small>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="department" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>Select Department</option>
                                                <option value="IT">IT</option>
                                                <option value="HR">HR</option>
                                                <option value="EXPORTS">EXPORTS</option>
                                                <option value="P2P">P2P</option>
                                                <option value="PPIC">PPIC</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 d-none d-sm-none d-md-none d-lg-block ">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <input class="form-check-input mb-2" checked name="group1" id="dummy" type="radio" 
                                                onclick="toggleRadio(false)" />Select Location
                                                <input class="form-check-input ml-2 mb-2" name="group1" id="customMessageRadioButton" 
                                                onclick="toggleRadio(true)" type="radio" />Other Location
                                            </small>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="itemCategory" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>Item Category</option>
                                                <option value="Desktop">Desktop</option>
                                                <option value="Monitor">Monitor</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Mouse">Mouse</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 input-group">
                                            <div class="form-outline mb-2">
                                                <input name="itemDescription" required type="text" id="itemDesc" class="form-control" required />
                                                <label class="form-label" for="itemDesc">Item Description</label>
                                            </div>
                                            <div class="form-outline mb-2 qty">
                                                <input name="itemQuantity" type="number" id="quantity" class="form-control" required/>
                                                <label class="form-label" for="quantity">Quantity</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-outline mb-2">
                                                <input name="reason" required type="text" id="reason" class="form-control" required />
                                                <label class="form-label" for="reason">Reason</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 input-group">
                                            <div class="form-outline mb-2 amount">
                                                <input name="amount" type="number" id="amount" class="form-control" required/>
                                                <label class="form-label" for="amount">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i> Amount</label>
                                            </div>
                                            <select name="passType" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>Select Type</option>
                                                <option value="NRGP">NRGP</option>
                                                <option value="RGP">RGP</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-outline mt-0">
                                                <textarea name="remark" class="form-control" id="remark" rows="2" required></textarea>
                                                <label class="form-label" for="remark">Remark</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg my-3">Submit</button>
                                </form>
                            </div>
                            <!-- Material entry end -->
                            <!-- Employee Pass -->
                            <div class="tab-pane fade px-2" id="pills-Emp" role="tabpanel" aria-labelledby="tab-Emp">
                                <form  class="needs-validation" novalidate>
                                    <div class="form-outline mb-2">
                                        <input required type="tel" id="mobile" class="form-control" required />
                                        <label class="form-label" for="mobile">Phone Number 2</label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
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
        
    </script>
    <script>
        function toggleRadio(flag) {
            if (!flag) {
                document.getElementById('otherLocation1').style.display = "none";
                document.getElementById('slt').style.display = "block";
            } else {
                document.getElementById('otherLocation').removeAttribute("disabled");
                document.getElementById('slt').style.display = "none";
                document.getElementById('otherLocation1').style.display = "block";
                document.getElementById('otherLocation').focus();
            }
        }
    </script>
    <script src="../assets/js/form-validation.js"></script>
</body>

</html>
<?php
include('dbconn.php');
$sql = "Select count(*) from inquery";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>gpms</title>
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
    <style>
        @media only screen and (min-width: 992px) {
            .input-group {
                width: 100%;
            }
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
            <div class="p-1">
                <div class="card p-2 mt-2">
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
                                        <input required type="tel" id="phone" name="phone" title="Please enter exactly 10 digits" onkeypress="phoneno()" pattern=".{10}" maxlength="10" class="form-control" required />
                                        <label class="form-label" for="phone">Phone Number</label>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg my-3">Next</button>
                                </form>
                            </div>
                            <!-- visitor pass end -->
                            <!-- Material entery -->
                            <div class="tab-pane fade px-2" id="pills-material" role="tabpanel" aria-labelledby="tab-material">
                                <form action="material_insert.php" method="post" id="form_data" class="needs-validation" novalidate>
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <select name="materialPass" class="form-select mb-2" required>
                                                <option value="">Material Pass</option>
                                                <option value="PLANT TO PLANT">PLANT TO PLANT</option>
                                                <option value="PLANT TO OTHERS">PLANT TO OTHERS</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="fromLocation" class="form-select mb-2" required>
                                                <option value="">From Location</option>
                                                <option value="A1-14,     Main Rohtak Road, Paschim Vihar, Near Paschim Vihar West Metro Station New Delhi-110063, INDIA">Corporate Office</option>
                                                <option value="14/486, Sunder Vihar, Outer Ring Road, Paschim Vihar, New Dehi-110 087, INDIA">Registered Office</option>
                                                <option value="Plot No. 35-36, Sector 6 A, I.I.E, SIDCUL, Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant I</option>
                                                <option value="Plot No. 56-57, Sector 6 A, I.I.E, SIDCUL, Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant II</option>
                                                <option value="Plot No. 11, Block A, Sector - 4, I.I.E, (SIDCUL) Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant III</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="toLocation" id="slt" class="form-select mb-2" required>
                                                <option value="">Address    </option>
                                                <option value="A1-14,     Main Rohtak Road, Paschim Vihar, Near Paschim Vihar West Metro Station New Delhi-110063, INDIA">Corporate Office</option>
                                                <option value="14/486, Sunder Vihar, Outer Ring Road, Paschim Vihar, New Dehi-110 087, INDIA">Registered Office</option>
                                                <option value="Plot No. 35-36, Sector 6 A, I.I.E, SIDCUL, Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant I</option>
                                                <option value="Plot No. 56-57, Sector 6 A, I.I.E, SIDCUL, Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant II</option>
                                                <option value="Plot No. 11, Block A, Sector - 4, I.I.E, (SIDCUL) Ranipur(BHEL), HARIDWAR, Uttrakhand-249403, INDIA">Plant III</option>
                                            </select>
                                            <div style="display: none;" id="otherLocation1" class="form-outline mb-2">
                                                <input id="otherLocation" style="display: none;" type="text" class="form-control" />
                                                <label class="form-label" for="otherLocation">Other Location</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-lg-none d-xl-none">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <input class="form-check-input mb-2" checked name="OL" id="dummy" type="radio" onclick="toggleRadio(false)" />Select Location
                                                <input class="form-check-input ml-2 mb-2" name="OL" id="customMessageRadioButton" onclick="toggleRadio(true)" type="radio" />Other Location
                                            </small>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-select mb-2" name="department" required>
                                                <option value="">Select Department</option>
                                                <?php
                                                $sql = "Select * from department";
                                                $query = mysqli_query($db, $sql);

                                                while ($fetch = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $fetch["department_name"] ?>"><?php echo $fetch["department_name"] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 d-none d-sm-none d-md-none d-lg-block ">
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                <input class="form-check-input mb-2" checked name="OL" id="dummy" type="radio" onclick="toggleRadio(false)" />Select Location
                                                <input class="form-check-input ml-2 mb-2" name="OL" id="customMessageRadioButton" onclick="toggleRadio(true)" type="radio" />Other Location
                                            </small>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="itemCategory" class="form-select mb-2" required>
                                                <option value="">Item Category</option>
                                                <option value="OUTWARD">OUTWARD</option>
                                                <option value="Monitor">Monitor</option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Mouse">Mouse</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="itemSubCategory" class="form-select mb-2" required>
                                                <option value="">Item Sub Category</option>
                                                <option value="Desktop1">Desktop Size</option>
                                                <option value="Monitor1">Monitor Size</option>
                                                <option value="Laptop1">Laptop Model</option>
                                                <option value="Mouse1">Mouse </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-select mb-2" name="empId" required>
                                                <option value="">Select Employee ID</option>
                                                <?php
                                                $sql = "Select * from emp_table";
                                                $query = mysqli_query($db, $sql);

                                                while ($fetch = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $fetch["name"] ?>"><?php echo $fetch["code"] . ' - (' . $fetch["name"] . ')' ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-select mb-2" name="approvedBy" required>
                                                <option value="">Approved By</option>
                                                <?php
                                                include('dbconn.php');
                                                $sql = "Select * from emp_table";
                                                $query = mysqli_query($db, $sql);

                                                while ($fetch = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?php echo $fetch[1] ?>"><?php echo $fetch[1] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-outline mb-2">
                                                <input name="reason" required type="text" id="reason" class="form-control" required />
                                                <label class="form-label" for="reason">Material Purpose</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-outline mb-2">
                                                <input name="personName" required type="text" id="personName" class="form-control" required />
                                                <label class="form-label" for="personName">Person Name (send to)</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-outline mb-1">
                                                <input name="companyName" required type="text" id="companyName" class="form-control" required />
                                                <label class="form-label" for="companyName">Company Name (send to)</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6 mb-1">
                                            <select name="passType" class="form-select mb-2" aria-label=".form-select-lg example" required>
                                                <option value="" selected>Select Type (NRGP/RGP)</option>
                                                <option value="NRGP">NRGP</option>
                                                <option value="RGP">RGP</option>
                                            </select>
                                        </div> -->
                                        <div class="col-lg-6">
                                            <small id="passwordHelpBlock" class="form-text text-muted mb-2 mt-2">
                                                <label class="form-label me-4 fw-bold">Challan Type</label>
                                                <input class="form-check-input mb-2" checked name="returnType" id="dummy" type="radio" onclick="toggleRadioRD(false)" value="NRGP" required />NRGP
                                                <input class="form-check-input ml-2 mb-2" name="returnType" id="customMessageRadioButton" onclick="toggleRadioRD(true)" value="RGP" type="radio" required />RGP
                                            </small>
                                        </div>
                                        <div class="col-lg-4">
                                            <div style="display: none;" id="ERD" class="form-outline mb-2">
                                                <input name="estimatedReturnDate" type="date" placeholder="Please select Date" id="ERD1" class="form-control" />
                                                <label class="form-label" for="ERD">Return Date</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Item Repeater -->
                                        <div id="show_item">
                                            <div class="row g-2 px-1" style="margin-left: 2px;">
                                                <div class="col-lg-4">
                                                    <div class="form-outline mb-2">
                                                        <input name="itemDescription[]" required type="text" id="itemDesc" class="form-control" required />
                                                        <label class="form-label" for="itemDesc">Item Description</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-outline mb-2 qty">
                                                        <input name="itemQuantity[]" type="number" id="quantity" class="form-control" required />
                                                        <label class="form-label" for="quantity">Quantity</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-outline mb-2 amount">
                                                        <input name="amount[]" type="number" id="amount" class="form-control" required />
                                                        <label class="form-label" for="amount">
                                                            <i class="fa-solid fa-indian-rupee-sign"></i> Amount</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-outline mb-2">
                                                        <textarea name="remark[]" class="form-control" id="remark" rows="1" required></textarea>
                                                        <label class="form-label" for="remark">Remark</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button class="btn btn-success add_item_btn">Add more</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" id="submit_btn" class="btn btn-primary btn-block btn-lg my-3" 
                                    style="font-size: 18px;">Submit</button>
                                </form>
                            </div>
                            <!-- Material entry end -->
                            <!-- Employee Pass -->
                            <div class="tab-pane fade px-2" id="pills-Emp" role="tabpanel" aria-labelledby="tab-Emp">
                                <form class="needs-validation" novalidate>
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
    <script>
        $(document).ready(function() {
            $(".add_item_btn").click(function(e) {
                e.preventDefault();
                $("#show_item").append(`
                <div class="row g-2 px-1 appent_item" style="margin-left: 2px;">
                    <div class="col-lg-4">
                        <div class="form-outline mb-2">
                            <input name="itemDescription[]" required type="text" id="itemDesc" class="form-control" required />
                            <label class="form-label" for="itemDesc">Item Description</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-outline mb-2 qty">
                            <input name="itemQuantity[]" type="number" id="quantity" class="form-control" required />
                            <label class="form-label" for="quantity">Quantity</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-outline mb-2 amount">
                            <input name="amount[]" type="number" id="amount" class="form-control" required />
                            <label class="form-label" for="amount">
                                <i class="fa-solid fa-indian-rupee-sign"></i> Amount</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-outline mb-2">
                            <textarea name="remark[]" class="form-control" id="remark" rows="1" required></textarea>
                            <label class="form-label" for="remark">Remark</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-danger remove_item_btn"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
                
                `);
            });

            $(document).on('click', '.remove_item_btn', function(e){
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            // ajax request
            // $("#form_data").submit(function(e){
            //     e.preventDefault();
            //     $("#submit_btn").val('processing...');
            //     $.ajax({
            //         url: 'material_insert.php',
            //         method: 'post',
            //         data: $(this).serialize(),
            //         success: function(responce){
            //             $("#submit_btn").val('Submit');
            //             $("#form_data")[0].reset();
            //             $(".append_item").remove();
            //             window.location='material_insert.php';
            //         }
            //     });
            // });
        });
    </script>
    <script>
        function toggleRadio(flag) {
            if (!flag) {
                document.getElementById('otherLocation1').style.display = "none";
                document.getElementById('otherLocation').style.display = "none";
                document.getElementById('otherLocation').removeAttribute("required", "required");
                document.getElementById('slt').style.display = "block";
                document.getElementById('slt').setAttribute("required", "required");
                document.getElementById('slt').setAttribute("name", "toLocation");
                document.getElementById('otherLocation').removeAttribute("name", "toLocation");
            } else {
                document.getElementById('slt').style.display = "none";
                document.getElementById('slt').removeAttribute("required", "required");
                document.getElementById('otherLocation1').style.display = "block";
                document.getElementById('otherLocation').style.display = "block";
                document.getElementById('otherLocation').focus();
                document.getElementById('otherLocation').setAttribute("required", "required");
                document.getElementById('otherLocation').setAttribute("name", "toLocation");
                document.getElementById('slt').removeAttribute("name", "toLocation");

            }
        }

        function toggleRadioRD(flag) {
            if (!flag) {
                document.getElementById('ERD').style.display = "none";
                document.getElementById('ERD1').removeAttribute("required", "required");
            } else {
                document.getElementById('ERD').style.display = "block";
                document.getElementById('ERD1').setAttribute("required", "required");
                document.getElementById('ERD1').focus();
            }
        }
    </script>
    <script src="../assets/js/form-validation.js"></script>
</body>

</html>
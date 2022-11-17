<?php

include('php/dbconn.php');

$sql = "Select * from login_user";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
$user = $fetch['username'];
?>

<div id="skin-select">
    <div id="logo">
        <h1 style="text-align:left;">
            <a href="/vmsp/index_1.php" style="color:#ffffff;"><img src="/vmsp/images/synokem-logo.png" style="margin-right: 5px; margin-top: -8px;" width="30" alt="logo"> vmsp </a>
        </h1>
    </div>

    <a id="toggle" class="active">
        <span class="entypo-menu"></span>
    </a>

    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="widget-menu"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/index_1.php" title="Home">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/dashboard.php" title="Creatpass Home">
                            <i class="icon-home"></i>
                            <span>Creatpass Home</span>
                        </a>
                    </li>

                    <li class="hide1">
                        <a class="tooltip-tip ajax-load" href="#" title="Employee">
                            <i class="icon-user-group"></i>
                            <span>Employee</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/emp_insert_0.php" title="Add"><i class="entypo-doc-text">

                                    </i><span>Add</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/emp_display_0.php" title="View"><i class="entypo-doc-text">

                                    </i><span>View</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/emp_edit1_0.php" title="Edit"><i class="entypo-doc-text">

                                    </i><span>Edit</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/emp_delete1_0.php" title="Delete"><i class="entypo-doc-text">

                                    </i><span>Delete</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hide1">
                        <a class="tooltip-tip ajax-load" href="#" title="Department">
                            <i class="icon-document-edit"></i>
                            <span>Department</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/department_0.php" title="Add"><i class="entypo-doc-text">

                                    </i><span>Add</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/department_display_0.php" title="View">
                                    <i class="entypo-doc-text"></i><span>View</span></a>
                            </li>
                            <!-- <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/department_delete_0.php" title="Delete">
                                    <i class="entypo-doc-text"></i><span>Delete</span></a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="hide1">
                        <a class="tooltip-tip ajax-load" href="#" title="Admin User">
                            <i class="icon-user"></i>
                            <span>Admin User</span>

                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/admin_user_0.php" title="Add"><i class="entypo-doc-text"></i><span>Add</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/admin_display_0.php" title="View"><i class="entypo-doc-text"></i><span>View</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="/vmsp/php/admin_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Delete</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="hide1">
                        <a class="tooltip-tip ajax-load" href="/vmsp/php/report_0.php" title="Report">
                            <i class="icon-camera"></i>
                            <span>Report</span>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/php/logout.php?log" title="Log out">
                            <i class="icon-chevron-right"></i>
                            <span>Log Out</span>
                        </a>
                    </li>

                </ul>
                <script type="text/javascript">
                    var a = document.getElementsByClassName('hide1')[0];
                    var b = document.getElementsByClassName('hide1')[1];
                    var c = document.getElementsByClassName('hide1')[2];
                    var d = document.getElementsByClassName('hide1')[3];
                </script>
                <?php
                if ($user == "guard") { ?>
                    <script>
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                        d.style.display = "none";
                    </script>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
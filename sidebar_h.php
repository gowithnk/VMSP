<div id="skin-select">
    <div id="logo">
        <h1 style="text-align:left;">

            <a href="/vmsp/dashboard.php" style="color:#ffffff;"><img src="/vmsp/images/synokem-logo.png" style="margin-right: 5px; margin-top: -8px;" width="30" alt="logo"> vmsp </a>
        </h1>
    </div>

    <a id="toggle">
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
                        <a class="tooltip-tip ajax-load" href="/vmsp/dashboard.php" title="Create Pass">
                            <i class="icon-home"></i>
                            <span>Home</span>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/php/phone_0.php" title="Create Pass">
                            <i class="icon-document"></i>
                            <span>Create Pass</span>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/php/active_users_0.php" title="Active Visitors">
                            <i class="icon-user"></i>
                            <span>Active Visitors</span>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="/vmsp/php/checkout_0.php" title="Check Out">
                            <i class="icon-arrow-right"></i>
                            <span>Check Out</span>

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
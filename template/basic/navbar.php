<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    @media (min-width: 768px) {
        /*added by T Morphy */
        /*from http://www.barrykooij.com/bootstrap-submenu-open-on-mouse-over/ to get hover behaviour on desktop */
        ul.nav li.dropdown:hover ul.dropdown-menu{ display: block; }
        ul.nav li.dropdown:hover ul.dropdown-menu li.dropdown-submenu ul.dropdown-menu {
            display: none;
        }
        ul.nav li.dropdown ul.dropdown-menu li.dropdown-submenu:hover ul.dropdown-menu {
            display: block;
        }
        .lead {
            font-size: 21px;
        }
    }
</style>

<div style="padding-bottom: 70px">
    <nav class="navbar navbar-inverse navstyle navbar-fixed-top " role="navigation" style="position: fixed">
        <div class="container"style="padding-top: 15px">
            <!--Title-->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo PageUtil::$HOME_PAGE;?>" style="color: whitesmoke;font-family: Calibri; font-size: xx-large"><strong>Khulna University Automation System</strong></a>
            </div>
            <!-- Menu -->
            <ul class="nav navbar-nav navbar-right">
                <li><a title="About Us" href="<?php echo PageUtil::$ABOUT;?>"><span>About</span></a></li>
                <?php
                                if (!isset($_SESSION['login.php'])){
                                    ?>
                <li><a href="<?php echo PageUtil::$LOGIN;?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                                }else{
                                    $globalUser=$_SESSION['globalUser'];
                                    ?>
                <li class="dropdowna">
                    <a class="dropbtna" data-toggle="dropdown" href="#"><?php echo $globalUser->getFirstName().' '.$globalUser->getLastName();?>
                        <span class="caret"></span></a>
                    <div class="dropdowna-content">
                        <a href="<?php echo PageUtil::$HOME;?>">Home</a>
                        <a href="<?php echo PageUtil::$USER_DETAILS;?>">User Details</a>
                        <a href="<?php echo PageUtil::$USER_FORGOT_PASSWORD;?>">Forgot Password</a>
                        <a href="login.php?logout=true">Logout</a>
                    </div>
                </li>
                <?php
                                }
                                ?>
            </ul>
        </div>
    </nav>
</div>

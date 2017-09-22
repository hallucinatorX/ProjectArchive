<div style="padding-bottom: 50px">
<nav class="navbar navbar-inverse navstyle navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button> -->
            <a class="navbar-brand" href="<?php echo PageUtil::$HOME_PAGE;?>" style="font-size: 30px;color: white; margin-left: -7px"><strong>Khulna University Automation</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" style="overflow-y: inherit;float: right" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <?php
                if (!isset($_SESSION['login.php'])) {
                    ?>
                    <li>
                        <a href="<?php echo PageUtil::$LOGIN; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    <?php
                }else {
                    $globalUser = $_SESSION['globalUser'];
                    ?>
                    <!-- <li class="dropdowna">
                        <a class="dropbtna" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           href="#"><?php echo $globalUser->getFirstName() . ' ' . $globalUser->getLastName(); ?>
                            <span class="caret"></span></a>
                        <div class="dropdowna-content">
                            <a href="<?php echo PageUtil::$HOME; ?>">Home</a>
                            <a href="<?php echo PageUtil::$USER_DETAILS; ?>">User Details</a>
                            <a href="<?php echo PageUtil::$USER_FORGOT_PASSWORD; ?>">Forgot Password</a>
                            <a href="login.php?logout=true">Logout</a>
                        </div>
                    </li> -->
                    <?php
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
</div>
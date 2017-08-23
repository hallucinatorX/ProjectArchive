<div style="padding-bottom: 50px">
    <nav class="navbar navbar-inverse navstyle navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo PageUtil::$HOME_PAGE;?>" style="color:whitesmoke;  font-family: Calibri; font-size: xx-large"><strong>Khulna University Automation System</strong></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo PageUtil::$PROJECT_HOME;?>"><span>Projects</span></a></li>
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
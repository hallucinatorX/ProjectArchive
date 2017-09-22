<?php
//menu based on the permission value from the globaluser variable
$globalUser='';
$globalPermission='';
$globalMenu ='';
$globalPage ='';
$logoutMenu='';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//if there is one logged in user
if (isset($_SESSION["globalUser"])){
	//retreving the logged user from the session
	$globalUser = $_SESSION["globalUser"];


	if (isset($_SESSION["globalPermission"])){
		//retreiveing the permission of the user from the session
		$globalPermission = $_SESSION["globalPermission"];
	}

	if (isset($_SESSION["globalMenu"])){
		//retreving the total menu setup of the sysetm that is initiated
		$globalMenu =  $_SESSION["globalMenu"];
	  //	echo $globalMenu;
	}
	else
    {
        echo "global menu not set";
    }

	// generating logout menu part
	//$logoutMenu = build_top_logout_menu($globalUser);

}

if (isset($_SESSION["globalPage"])){	
	//retreving the current page
	$globalPage =  $_SESSION["globalPage"];
  	
}

//print the top menu
if(isset($_SESSION['login.php'])) {
    if(isset($globalMenu)) {
        ?>
        <nav class="navbar navbar-default" role="navigation"
             style="background-color: whitesmoke; border-color: transparent;padding-top: 15px;height: 80px;font-size:15px;margin-left: -20px">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                <!-- Menu -->
                <ul class="nav navbar-nav">
                    <?php
                    for ($i = 0; $i < sizeof($globalMenu); $i++) {

                        // if the first layer is visible then go inside -- build table row by row for the category
                        if ($globalMenu[$i]->isVisible()) {
                            ?>
                            <li class="dropdown"><a href="#" title="<?php echo $globalMenu[$i]->getTitle();?>" class="dropdown-toggle disabled" data-toggle="dropdown">
                                    <?php echo $globalMenu[$i]->getTitle();?><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php
                                    for ($j = 0; $j < sizeof($globalMenu[$i]->_Child); $j++) {

                                        //if the second layer is visible go inside -- build table row by row
                                        if ($globalMenu[$i]->_Child[$j]->isVisible()) {

                                            if (sizeof($globalMenu[$i]->_Child[$j]->_Child) > 0) {
                                                ?>
                                                <li class="dropdown-submenu">
                                                    <a href="#" tabindex="-1" class="dropdown-toggle"
                                                       data-toggle="dropdown"><?php echo $globalMenu[$i]->_Child[$j]->getTitle();?></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <?php
                                                        for ($k = 0; $k < sizeof($globalMenu[$i]->_Child[$j]->_Child); $k++) {

                                                            //if the third layer is visible -- build table column by column
                                                            if ($globalMenu[$i]->_Child[$j]->_Child[$k]->isVisible()) {
                                                                ?>
                                                                <li>
                                                                    <a href="<?php echo $globalMenu[$i]->_Child[$j]->_Child[$k]->getLink(); ?>"><?php echo $globalMenu[$i]->_Child[$j]->_Child[$k]->getTitle(); ?></a>
                                                                </li>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </li><!--end submenu-->
                                                <?php
                                            } else {
                                                ?>
                                                <li>
                                                    <a href="#"><?php echo $globalMenu[$i]->_Child[$j]->getTitle() ?></a>
                                                </li>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
                  <ul class="nav navbar-nav navbar-right">
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
                    <li class="dropdowna">
                        <a class="dropbtna" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           href="#"><?php echo $globalUser->getFirstName() . ' ' . $globalUser->getLastName(); ?>
                            <span class="caret"></span></a>
                        <div class="dropdowna-content">
                            <a href="<?php echo PageUtil::$HOME; ?>">Home</a>
                            <a href="<?php echo PageUtil::$USER_DETAILS; ?>">User Details</a>
                            <a href="<?php echo PageUtil::$USER_FORGOT_PASSWORD; ?>">Forgot Password</a>
                            <a href="login.php?logout=true">Logout</a>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
                </div>
            </div>
        </nav>
        <?php
    }
}
?>

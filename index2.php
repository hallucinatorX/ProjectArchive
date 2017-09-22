<?php
include_once 'path.php';
//including the common file
include_once COMMON.'/class.common.php';
include_once COMMON.'/class.common.user.php';

//current template path
$template_link= TEMPLATE.'/basic/';



ob_start(); //converts php output to a buffer and later publish it

// start session always
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_URI = $_SERVER['REQUEST_URI'];
//finding the page
$page = unparse_url(parse_url($_URI));

//TODO: check whether middleware application is active
//apply middleware
$page=apply_middleware($page);

//if does not match with the stored one then this is a new page
if(isset($_SESSION['globalPage'])&&strcasecmp($_SESSION['globalPage'],$page)){
    $_SESSION['previousPage']=$_SESSION['globalPage'];
}

//store current page in the session
 $_SESSION['globalPage']=$page;

// adding menu code here
include_once $template_link.'navbar.php';

if (isset($_SESSION['login.php'])){
    ?>
<div id="menu">
<?php
}
else{
    ?>
    <div id="menu">
    <?php
}
    include_once $template_link.'menu.php';
    ?>
</div>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>University Automation</title>
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/style.css"/>
        <link rel="stylesheet" href="resources/css/navbarStyle.css">
        <link rel="stylesheet" href="resources/css/dropdownStyle.css">
        <link rel="stylesheet" href="resources/css/3-col-portfolio.css">
        <script src="resources/js/jquery.min.js"></script>
        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/myscript.js"></script>
        <script src="resources/js/question_js_2.js" rel="script"></script>
    </head>

<body>

<div class="col-md-12" >
        <div id="menu">
            <?php
                //do not show the menu for login page
            if(isset($_SESSION['login.php'])) {
//                if(strcasecmp($page,PageUtil::$LOGIN)){
//
//                }
                //echo print_top_menu($globalMenu, $logoutMenu);
            }
            ?>
        </div>

        <div id="body">
            <?php
                include $template_link.'body.php';

            ?>
        </div>

<!--        <div id="footer" class="panel-footer" style="color:white;height: 50px;padding-top: 15px;background-color: #445760">-->
<!---->
<!--        	--><?php
//        		include $template_link.'footer.php';
//
//        	?>
<!--        </div>-->
    <div id="footer">
        <?php
        include $template_link.'footer.php';
        ?>
    </div>

</div>
</body>
</html>
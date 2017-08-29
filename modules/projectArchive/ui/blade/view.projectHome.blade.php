{{--Home Page Pagination--}}
<?php
include_once './util/class.util.php';
include_once '/../../bao/class.projectbao.php';
include_once '/../../bao/class.projectHomebao.php';

$_ProjectBao=new ProjectBao();
$_ProjectHomeBao=new ProjectHomeBao();
$_DB=DBUtil::getInstance();

/*Pagination*/
if (isset($_GET['page'])&&isset($_GET['limit'])){
    $getROW=$_ProjectHomeBao->getLimitProject($_GET['page'],$_GET['limit']);
}
?>

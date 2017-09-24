<?php
include_once './util/class.util.php';
include_once '/../../bao/class.thesisbao.php';
include_once '/../../bao/class.thesisHomebao.php';

$_ThesisBao=new ThesisBao();
$_ThesisHomeBao=new ThesisHomeBao();
$_DB=DBUtil::getInstance();

/*Pagination*/
if (isset($_GET['page'])&&isset($_GET['limit'])){
    $getROW=$_ThesisHomeBao->getLimitThesis($_GET['page'],$_GET['limit']);
}
?>

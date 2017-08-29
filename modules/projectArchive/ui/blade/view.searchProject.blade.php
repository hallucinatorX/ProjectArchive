{{--Search Project--}}
<?php
include_once './util/class.util.php';
include_once '/../../bao/class.searchProjectbao.php';
include_once '/../../bao/class.projectbao.php';

$_SearchProjectBao=new SearchProjectBao();
$_ProjectBao=new ProjectBao();
$_DB=DBUtil::getInstance();

?>


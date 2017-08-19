<?php
include_once './util/class.util.php';
include_once '/../../bao/class.addMemberbao.php';
include_once '/../../bao/class.projectbao.php';

$_ProjectBao=new ProjectBao();
$Project=new Project();
$_AddMemberBao=new AddMemberBao();
$_DB=DBUtil::getInstance();


?>
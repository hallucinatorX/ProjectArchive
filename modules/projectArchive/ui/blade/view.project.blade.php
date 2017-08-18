<?php
include_once './util/class.util.php';
include_once '/../../bao/class.projectbao.php';

$_ProjectBao=new ProjectBao();
$_DB=DBUtil::getInstance();

/* saving a new project*/
if(isset($_POST['create']))
{
    $Project=new CreateProject();

    $Project->setProjectId(Util::getGUID());
    $Project->setTitle($_DB->secureInput($_POST['title']));
    $Project->setDescription($_DB->secureInput($_POST['description']));


    $Result=$_ProjectBao->createProject($Project);

    if($Result->getIsSuccess())
        echo '<strong>'.$Result->getResultObject().'</strong>';
}




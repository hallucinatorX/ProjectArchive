<?php
include_once './util/class.util.php';
include_once '/../../bao/class.memberbao.php';
include_once '/../../bao/class.projectbao.php';

$_ProjectBao=new ProjectBao();
$Project=new Project();
$_MemberBao=new MemberBao();
$_DB=DBUtil::getInstance();

/*Add Members*/
if(isset($_GET['auid'])&&isset($_GET['id'])){
    $StudentProject=new StudentProject();
    $StudentProject->setStudentProjectId(Util::getGUID());
    $StudentProject->setProjectId($_GET['id']);
    $StudentProject->setStudentId($_GET['auid']);

    $Result=$_MemberBao->addMember($StudentProject);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$MEMBER."?id=".$_GET['id']);
    }
}

/*Remove Members*/
if(isset($_GET['ruid'])&&isset($_GET['id'])){
    $StudentProject=new StudentProject();
    $StudentProject->setProjectId($_GET['id']);
    $StudentProject->setStudentId($_GET['ruid']);

    $Result=$_MemberBao->removeMember($StudentProject);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$MEMBER."?id=".$_GET['id']);
    }
}

?>

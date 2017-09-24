<?php
include_once './util/class.util.php';
include_once '/../../bao/class.thesisMemberbao.php';
include_once '/../../bao/class.thesisbao.php';

$_ThesisBao=new ThesisBao();
$Thesis=new Thesis();
$_MemberBao=new ThesisMemberBao();
$_DB=DBUtil::getInstance();

/*Add Members*/
if(isset($_GET['auid'])&&isset($_GET['id'])){
    $StudentThesis=new StudentThesis();
    $StudentThesis->setStudentThesisId(Util::getGUID());
    $StudentThesis->setThesisId($_GET['id']);
    $StudentThesis->setStudentId($_GET['auid']);

    $Result=$_MemberBao->addMember($StudentThesis);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$THESIS_MEMBER."?id=".$_GET['id']);
    }
}

/*Add Supervisors*/
if(isset($_GET['auid2'])&&isset($_GET['id'])){
    $SupervisorThesis=new SupervisorThesis();
    $SupervisorThesis->setSupervisorThesisId(Util::getGUID());
    $SupervisorThesis->setThesisId($_GET['id']);
    $SupervisorThesis->setSupervisorId($_GET['auid2']);

    $Result=$_MemberBao->addSupervisor($SupervisorThesis);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$THESIS_MEMBER."?id=".$_GET['id']);
    }
}

/*Remove Members*/
if(isset($_GET['ruid'])&&isset($_GET['id'])){
    $StudentThesis=new StudentThesis();
    $StudentThesis->setThesisId($_GET['id']);
    $StudentThesis->setStudentId($_GET['ruid']);

    $Result=$_MemberBao->removeMember($StudentThesis);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$THESIS_MEMBER."?id=".$_GET['id']);
    }
}

/*Remove Supervisors*/
if(isset($_GET['ruid2'])&&isset($_GET['id'])){
    $SupervisorThesis=new SupervisorThesis();
    $SupervisorThesis->setThesisId($_GET['id']);
    $SupervisorThesis->setSupervisorId($_GET['ruid2']);

    $Result=$_MemberBao->removeSupervisor($SupervisorThesis);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$THESIS_MEMBER."?id=".$_GET['id']);
    }
}

?>

<?php
include_once './util/class.util.php';
include_once '/../../bao/class.projectbao.php';

$_ProjectBao=new ProjectBao();
$_DB=DBUtil::getInstance();

/* saving a new project*/
if(isset($_POST['create']))
{
    $Project=new Project();

    $Project->setProjectId(Util::getGUID());
    $Project->setProjectTitle($_DB->secureInput($_POST['title']));
    $Project->setProjectDescription($_DB->secureInput($_POST['description']));
    $Project->setProjectLink($_DB->secureInput($_POST['link']));
    $Project->setProjectLanguage($_DB->secureInput($_POST['language']));
    $Project->setProjectYearId($_POST['year_id']);
    $Project->setProjectTermId($_POST['term_id']);
    $Project->setProjectCourseId($_POST['course_id']);
    $Project->setProjectDisciplineId($_POST['discipline_id']);
    $Project->setProjectTeacherId($_POST['teacher_id']);

    $Result=$_ProjectBao->createProject($Project);

    if($Result->getIsSuccess())
        echo '<strong>'.$Result->getResultObject().'</strong>';
}

if (isset($_GET['edit'])){
    $Project=new Project();

    $Project->setProjectId($_GET['edit']);
    $getRow=$_ProjectBao->getProject($Project)->getResultObject();
}

if (isset($_POST['update'])){
    $Project=new Project();

    $Project->setProjectId($_GET['edit']);
    $Project->setProjectTitle($_DB->secureInput($_POST['title']));
    $Project->setProjectDescription($_DB->secureInput($_POST['description']));
    $Project->setProjectLink($_DB->secureInput($_POST['link']));
    $Project->setProjectLanguage($_DB->secureInput($_POST['language']));
    $Project->setProjectYearId($_POST['year_id']);
    $Project->setProjectTermId($_POST['term_id']);
    $Project->setProjectCourseId($_POST['course_id']);
    $Project->setProjectDisciplineId($_POST['discipline_id']);
    $Project->setProjectTeacherId($_POST['teacher_id']);

    $Result=$_ProjectBao->updateProject($Project);

    if($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$PROJECT);
    }
}

if (isset($_GET['del'])){
    $Project=new Project();

    $Project->setProjectId($_GET['del']);
    $Result=$_ProjectBao->deleteProject($Project);

    if ($Result->getIsSuccess()){
        echo '<strong>'.$Result->getResultObject().'</strong>';
        header("Location:".PageUtil::$PROJECT);
    }
}



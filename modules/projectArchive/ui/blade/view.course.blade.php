<?php
include_once './util/class.util.php';
include_once '/../../bao/class.coursebao.php';

$_CourseBao=new CourseBao();
$_DB=DBUtil::getInstance();


//Create a Course
if(isset($_POST['create'])){
    $Course=new Course();

    $Course->setCourseId(Util::getGUID());
    $Course->setCourseNumber($_DB->secureInput($_POST['courseNo']));
    $Course->setCourseName($_DB->secureInput($_POST['courseName']));

    $Result=$_CourseBao->createCourse($Course);

    if($Result->getIsSuccess())
        echo '<strong>'.$Result->getResultObject().'</strong>';
}


//Edit a Course
if (isset($_GET['edit'])){
    $Course=new Course();

    $Course->setCourseId($_GET['edit']);
    $getROW=$_CourseBao->getCourse($Course)->getResultObject();
}


//Update a Course
if (isset($_POST['update'])){
    $Course=new Course();

    $Course->setCourseId($_GET['edit']);
    $Course->setCourseNumber($_POST['courseNo']);
    $Course->setCourseName($_POST['courseName']);

    $_CourseBao->updateCourse($Course);

    header("Location:".PageUtil::$COURSE);
}


//Delete a Course
if (isset($_GET['del'])){
    $Course=new Course();

    $Course->setCourseId($_GET['del']);
    $_CourseBao->deleteCourse($Course);

    header("Location:".PageUtil::$COURSE);
}

?>
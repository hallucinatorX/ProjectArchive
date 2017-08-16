<?php

include_once './util/class.util.php';
include_once '/../dao/class.coursedao.php';


/*
	User Business Object
*/
Class CourseBao
{

    private $_CourseDao;

    function __construct()
    {
        $this->_CourseDao=new CourseDao();
    }

    //new Course creation
    public function createCourse($Course){
       // $Result=new Result();
        $Result=$this->_CourseDao->createCourse($Course);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in CourseDao.createCourse()");

        return $Result;
    }

    //get All Courses
    public function getAllCourses(){
       // $Result=new Result();
        $Result=$this->_CourseDao->getAllCourses();
        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in CourseDao.getAllCourse()");

        return $Result;
    }

    public function getCourse($Course){
       // $Result=new Result();
        $Result=$this->_CourseDao->getCourse($Course);

        if(!$Result->getIsSuccess()){
            $Result->getResultObject("Database failure in CourseDao.getCourse()");
        }

        return $Result;
    }

    public function deleteCourse($Course){
        //$Result=new Result();
        $Result=$this->_CourseDao->deleteCourse($Course);
        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in CourseDao.deleteCourse()");

        return $Result;
    }

    public function updateCourse($Course){
        //$Result=new Result();
        $Result=$this->_CourseDao->updateCourse($Course);

        if(!$Result->getIsSuccess())
            $Result->getResultObject("Database failure in CourseDao.updateCourse()");

        return $Result;
    }

}

?>
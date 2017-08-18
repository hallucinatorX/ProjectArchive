<?php

include_once './util/class.util.php';
include_once '/../dao/class.projectdao.php';


/*
	User Business Object
*/
Class ProjectBao
{

    private $_ProjectDao;

    function __construct()
    {

        $this->_ProjectDao = new ProjectDao();

    }

    //new Project creation
    public function createProject($Project){

        $Result = $this->_ProjectDao->createProject($Project);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in ProjectDao.newProject()");

        return $Result;
    }

    //get All Projects
    public function getAllProject(){

        $Result=$this->_ProjectDao->getAllProject();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllProject()");
        }

        return $Result;
    }

    //get All Years
    public function getAllYears(){
        $Result=$this->_ProjectDao->getAllYears();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllYears()");
        }

        return $Result;
    }

    //get All Terms
    public function getAllTerms(){
        $Result=$this->_ProjectDao->getAllTerms();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllTerms()");
        }

        return $Result;
    }

    //get All Courses
    public function getAllCourses(){
        $Result=$this->_ProjectDao->getAllCourses();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllCourses()");
        }

        return $Result;
    }

    //get All Disciplines
    public function getALlDisciplines(){
        $Result=$this->_ProjectDao->getAllDisciplines();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllDisciplines()");
        }

        return $Result;
    }
}

?>
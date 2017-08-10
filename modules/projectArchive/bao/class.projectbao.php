<?php

include_once './util/class.util.php';
include_once '/../dao/class.projectdao.php';


/*
	User Business Object
*/
Class ProjectBao
{

    private $_ProjectDao;

    function ProjectBao()
    {

        $this->_ProjectDao = new ProjectDao();

    }

    //new Project creation
    public function newProject($Project){

        $Result = new Result();
        $Result = $this->_ProjectDao->newProject($Project);

        if(!$Result->getIsSuccess())
            $Result->setResultObject("Database failure in ProjectDao.newProject()");

        return $Result;
    }

    //get All Projects
    public function getAllProject(){
        $Result=new Result();
        $Result=$this->_ProjectDao->getAllProject();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectDao.getAllProject()");
        }

        return $Result;
    }
}

?>
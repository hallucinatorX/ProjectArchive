<?php
// write dao object for each class
include_once './common/class.common.project.php';
include_once './util/class.util.php';

Class ProjectDao
{

    private $_DB;
    private $_Project;

    function ProjectDao()
    {

        $this->_DB = DBUtil::getInstance();
        $this->_Project = new CreateProject();
    }

    public function newProject($Project){

        $ID=$Project->getProjectId();
        $Title=$Project->getTitle();
        $Description=$Project->getDescription();


        $SQL = "INSERT INTO create_project(id,title,description) VALUES('$ID' ,'$Title','$Description')";

        $SQL = $this->_DB->doQuery($SQL);

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function getAllProject(){
        $ProjectList=array();

        $SQL="SELECT * FROM create_project";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];
            $this->_Project = new CreateProject();

            $this->_Project->setTitle( $row['title']);
            $this->_Project->setDescription( $row['description'] );

            $ProjectList[]=$this->_Project;

        }

        //todo: LOG util with level of log


        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($ProjectList);

        return $Result;

    }
}

?>
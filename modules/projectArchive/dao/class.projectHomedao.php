<?php
// write dao object for each class
include_once './common/class.common.project.php';
include_once './util/class.util.php';

class ProjectHomeDao{

    private $_DB;
    private $_Project;

    public function __construct()
    {
        $this->_DB=DBUtil::getInstance();
        $this->_Project=new Project();
    }

    public function getLimitProject($page,$limit){
        $ProjectList=array();
        $SQL="SELECT * FROM pms_project LIMIT $page,$limit";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row){
            $this->_Project=new Project();
            $this->_Project->setProjectId($row['id']);
            $this->_Project->setProjectTitle($row['title']);
            $this->_Project->setProjectDescription($row['description']);
            $this->_Project->setProjectLink($row['link']);
            $this->_Project->setProjectLanguage($row['language']);
            $this->_Project->setProjectYearId($row['year_id']);
            $this->_Project->setProjectTermId($row['term_id']);
            $this->_Project->setProjectCourseId($row['course_id']);
            $this->_Project->setProjectDisciplineId($row['discipline_id']);
            $this->_Project->setProjectTeacherId($row['teacher_id']);
            $this->_Project->setProjectCreatedAt($row['created_at']);
            $this->_Project->setProjectUpdatedAt($row['updated_at']);

            $ProjectList[]=$this->_Project;
        }

        
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($ProjectList);
        
        return $Result;
    }
    
}
?>
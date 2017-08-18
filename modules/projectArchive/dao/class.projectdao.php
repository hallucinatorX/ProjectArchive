<?php
// write dao object for each class
include_once './common/class.common.project.php';
include_once './util/class.util.php';

Class ProjectDao
{

    private $_DB;
    private $_Project;
    private $_Year;
    private $_Term;
    private $_Course;
    private $_Discipline;

    function ProjectDao()
    {

        $this->_DB = DBUtil::getInstance();
        $this->_Project = new Project();
        $this->_Year=new Year();
        $this->_Term=new Term();
        $this->_Course=new Course();
    }

    public function createProject($Project){

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

        $SQL="SELECT create_project.title,create_project.description FROM create_project";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        for($i = 0; $i < sizeof($rows); $i++) {
            $row = $rows[$i];

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

    //Get All Years
    public function getAllYears(){
        $YearList=array();

        $SQL="SELECT * FROM tbl_year";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        foreach ($rows as $row){

            $this->_Year=new Year();
            $this->_Year->setYearId($row['ID']);
            $this->_Year->setYearName($row['Name']);

            $YearList[]=$this->_Year;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($YearList);

        return $Result;
    }

    //get All Terms
    public function getAllTerms(){
        $TermList=array();

        $SQL="SELECT * FROM tbl_term";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row){
            $this->_Term=new Term();
            $this->_Term->setTermId($row['ID']);
            $this->_Term->setTermName($row['Name']);

            $TermList[]=$this->_Term;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($TermList);

        return $Result;
    }

    //get All Courses
    public function getAllCourses(){
        $CourseList=array();

        $SQL="SELECT * FROM tbl_course";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row){
            $this->_Course=new Course();
            $this->_Course->setCourseId($row['ID']);
            $this->_Course->setCourseNo($row['CourseNo']);
            $this->_Course->setCourseTitle($row['Title']);
            $this->_Course->setCourseCredit($row['Credit']);
            $this->_Course->setCourseTypeId($row['CourseTypeID']);
            $this->_Course->setCourseDisciplineId($row['DisciplineID']);
            $this->_Course->setCourseIsDeleted($row['IsDeleted']);

            $CourseList[]=$this->_Course;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($CourseList);

        return $Result;
    }

    //get All Discipline
    public function getAllDisciplines(){
        $DisciplineList=array();

        $SQL="SELECT * FROM tbl_discipline";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row){
            $this->_Discipline=new Discipline();
            $this->_Discipline->setDisciplineId($row['ID']);
            $this->_Discipline->setDisciplineName($row['Name']);
            $this->_Discipline->setDisciplineShortCode($row['ShortCode']);
            $this->_Discipline->setDisciplineSchoolId($row['SchoolID']);

            $DisciplineList[]=$this->_Discipline;
        }
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($DisciplineList);

        return $Result;
    }
}

?>
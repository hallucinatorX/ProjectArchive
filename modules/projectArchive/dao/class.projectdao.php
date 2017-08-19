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
    private $_Teacher;

    function __construct()
    {

        $this->_DB = DBUtil::getInstance();
        $this->_Project = new Project();
        $this->_Year=new Year();
        $this->_Term=new Term();
        $this->_Course=new Course();
        $this->_Teacher=new User();
    }

    public function createProject($Project){

        $ID=$Project->getProjectId();
        $Title=$Project->getProjectTitle();
        $Description=$Project->getProjectDescription();
        $Link=$Project->getProjectLink();
        $Language=$Project->getProjectLanguage();
        $YearId=$Project->getProjectYearId();
        $TermId=$Project->getProjectTermId();
        $CourseId=$Project->getProjectCourseId();
        $DisciplineId=$Project->getProjectDisciplineId();
        $TeacherId=$Project->getProjectTeacherId();

        $SQL = "INSERT INTO pms_project VALUES('$ID' ,'$Title','$Description','$Link','$Language','$YearId','$TermId','$CourseId','$DisciplineId',
        '$TeacherId',CURRENT_TIMESTAMP ,CURRENT_TIMESTAMP )";

        $SQL = $this->_DB->doQuery($SQL);

        $Result = new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function getAllProjects(){
        $ProjectList=array();

        $SQL="SELECT * FROM pms_project";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        foreach ($rows as $row) {
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

    //get All Teachers
    public function getAllTeachers(){
        $TeacherList=array();

        $SQL="SELECT tbl_user.ID,tbl_user.FirstName,tbl_user.LastName FROM tbl_user 
        INNER JOIN tbl_user_role ON tbl_user.ID=tbl_user_role.UserID INNER JOIN tbl_role ON tbl_user_role.RoleID=tbl_role.ID 
        WHERE tbl_role.Name='Teacher'";

        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row) {
            $this->_Teacher=new User();
            $this->_Teacher->setID($row['ID']);
            $this->_Teacher->setFirstName($row['FirstName']);
            $this->_Teacher->setLastName($row['LastName']);

            $TeacherList[]=$this->_Teacher;
        }
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($TeacherList);

        return $Result;
    }

    //get specific year
    public function getYear($Year){
        $SQL="SELECT * FROM tbl_year WHERE tbl_year.ID='".$Year."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
        $this->_Year=new Year();
        $this->_Year->setYearId($row['ID']);
        $this->_Year->setYearName($row['Name']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Year);
        
        return $Result;
    }

    //get specific term
    public function getTerm($Term){
        $SQL="SELECT * FROM tbl_term WHERE tbl_term.ID='".$Term."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
        $this->_Term=new Term();
        $this->_Term->setTermId($row['ID']);
        $this->_Term->setTermName($row['Name']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Term);

        return $Result;
    }

    //get specific course
    public function getCourse($Course){
        $SQL="SELECT * FROM tbl_course WHERE tbl_course.ID='".$Course."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
        $this->_Course=new Course();
        $this->_Course->setCourseId($row['ID']);
        $this->_Course->setCourseNo($row['CourseNo']);
        $this->_Course->setCourseTitle($row['Title']);
        $this->_Course->setCourseCredit($row['Credit']);
        $this->_Course->setCourseTypeId($row['CourseTypeID']);
        $this->_Course->setCourseDisciplineId($row['DisciplineID']);
        $this->_Course->setCourseIsDeleted($row['IsDeleted']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Course);

        return $Result;
    }
    
    //get specific Discipline
    public function getDiscipline($Discipline){
        $SQL="SELECT * FROM tbl_discipline WHERE tbl_discipline.ID='".$Discipline."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
        $this->_Discipline=new Discipline();
        $this->_Discipline->setDisciplineId($row['ID']);
        $this->_Discipline->setDisciplineName($row['Name']);
        $this->_Discipline->setDisciplineShortCode($row['ShortCode']);
        $this->_Discipline->setDisciplineSchoolId($row['SchoolID']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Discipline);

        return $Result;
    }
 
    //get specific Teacher
    public function getTeacher($Teacher){
        $SQL="SELECT tbl_user.ID, tbl_user.FirstName,tbl_user.LastName FROM tbl_user 
        INNER JOIN tbl_user_role ON tbl_user.ID=tbl_user_role.UserID INNER JOIN tbl_role ON tbl_user_role.RoleID=tbl_role.ID 
        WHERE tbl_role.Name='Teacher' AND tbl_user.ID='".$Teacher."'";

        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
        $this->_Teacher=new User();
        $this->_Teacher->setID($row['ID']);
        $this->_Teacher->setFirstName($row['FirstName']);
        $this->_Teacher->setLastName($row['LastName']);
        
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Teacher);
        
        return $Result;
    }
    
    //get specific project
    public function getProject($Project){

        $SQL="SELECT * FROM pms_project WHERE pms_project.id='".$Project->getProjectId()."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();
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

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Project);
        
        return $Result;
    }
    
    //update previous project
    public function updateProject($Project){
        $SQL="UPDATE pms_project SET pms_project.title='".$Project->getProjectTitle()."',pms_project.description='".$Project->getProjectDescription()."',
        pms_project.link='".$Project->getProjectLink()."',pms_project.language='".$Project->getProjectLanguage()."',pms_project.year_id='".$Project->getProjectYearId()."',
        pms_project.term_id='".$Project->getProjectTermId()."',pms_project.course_id='".$Project->getProjectCourseId()."',
        pms_project.discipline_id='".$Project->getProjectDisciplineId()."',pms_project.teacher_id='".$Project->getProjectTeacherId()."',
        pms_project.updated_at=CURRENT_TIMESTAMP WHERE pms_project.id='".$Project->getProjectId()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);
        
        return $Result;
    }
    
    //delete specific project
    public function deleteProject($Project){
        $SQL="DELETE FROM pms_project WHERE pms_project.id='".$Project->getProjectId()."'";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);
        
        return $Result;
    }
    
}

?>
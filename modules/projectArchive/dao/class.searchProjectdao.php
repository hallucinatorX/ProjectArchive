<!--Search specific project-->
<?php
// write dao object for each class
include_once './common/class.common.project.php';
include_once './util/class.util.php';

Class SearchProjectDao
{
    private $_DB;
    private $_Project;

    public function __construct()
    {
        $this->_DB=DBUtil::getInstance();
        $this->_Project=new Project();
    }

    //Get All Languages
    public function getAllLanguages(){
        $LanguageList=array();

        $SQL="SELECT DISTINCT pms_project.language FROM pms_project";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        foreach ($rows as $row) {
            $this->_Project=new Project();
            $this->_Project->setProjectLanguage($row['language']);

            $LanguageList[]=$this->_Project;
        }
        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($LanguageList);

        return $Result;
    }

    //Get Searched Project
    public function getSearchedProject(){
        $Title=$Language=$YearId=$TermId=$CourseId=$DisciplineId=$TeacherId=$CreatedAt="";

        if (isset($_POST['title'])){
            $Title=$_POST['title'];
        }
        if (isset($_POST['language'])){
            $Language=$_POST['language'];
        }
        if (isset($_POST['year_id'])){
            $YearId=$_POST['year_id'];
        }
        if (isset($_POST['term_id'])){
            $TermId=$_POST['term_id'];
        }
        if (isset($_POST['course_id'])){
            $CourseId=$_POST['course_id'];
        }
        if (isset($_POST['discipline_id'])){
            $DisciplineId=$_POST['discipline_id'];
        }
        if (isset($_POST['teacher_id'])) {
            $TeacherId = $_POST['teacher_id'];
        }
        if (isset($_POST['created_at'])){
            $CreatedAt=$_POST['created_at'];
        }

        $ProjectList=array();

        $SQL="SELECT * FROM pms_project WHERE pms_project.title LIKE '%$Title%' AND pms_project.language LIKE '%$Language%'
        AND pms_project.year_id LIKE '%$YearId%' AND pms_project.term_id LIKE '%$TermId%' AND pms_project.course_id LIKE '%$CourseId%'
        AND pms_project.discipline_id LIKE '%$DisciplineId%' AND pms_project.teacher_id LIKE '%$TeacherId%'
        AND pms_project.created_at LIKE '%$CreatedAt%'";

        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        foreach ($rows as $row) {
            $this->_Project=new Project();
            $this->_Project->setProjectId($row['id']);
            $this->_Project->setProjectThumbnail($row['thumbnail']);
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

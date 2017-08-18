<?php
include_once './common/class.common.project.php';
include_once './util/class.util.php';

class CourseDao{

    private $_DB;
    private $_Course;

    function __construct()
    {
        $this->_DB=DBUtil::getInstance();
        $this->_Course=new Course();
    }

    //new Course Creation
    public function createCourse($Course){
        $ID=$Course->getCourseId();
        $Number=$Course->getCourseNumber();
        $Name=$Course->getCourseName();

        $SQL="INSERT INTO pms_course VALUES ('$ID','$Number','$Name')";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    //Get all Course information
    public function getAllCourses(){
        $CourseList=array();
        $SQL="SELECT * FROM pms_course";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();

        foreach ($rows as $row){
            $this->_Course=new Course();

            $this->_Course->setCourseId($row['id']);
            $this->_Course->setCourseNumber($row['courseNo']);
            $this->_Course->setCourseName($row['Name']);

            $CourseList[]=$this->_Course;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($CourseList);

        return $Result;
    }

    //Get the requested course
    public function getCourse($Course){
        $SQL="SELECT * FROM pms_course WHERE pms_course.id='".$Course->getCourseId()."'";
        $this->_DB->doQuery($SQL);

        $row=$this->_DB->getTopRow();

        $this->_Course=new Course();

        $this->_Course->setCourseId($row['id']);
        $this->_Course->setCourseNumber($row['courseNo']);
        $this->_Course->setCourseName($row['Name']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Course);

        return $Result;
    }

    //Update the requested course
    public function updateCourse($Course){
        $SQL="UPDATE pms_course SET pms_course.courseNo='".$Course->getCourseNumber()."',pms_course.Name='".$Course->getCourseName()."' 
        WHERE pms_course.id='".$Course->getCourseId()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    //Delete the requested course
    public function deleteCourse($Course){
        $SQL="DELETE FROM pms_course WHERE pms_course.id='".$Course->getCourseId()."'";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

}

?>
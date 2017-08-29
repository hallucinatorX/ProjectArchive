<!--Assign or remove members to a project-->
<?php
// write dao object for each class
include_once './common/class.common.project.php';
include_once './util/class.util.php';

class MemberDao{
    private $_DB;
    private $_StudentProject;
    private $_Student;

    public function __construct()
    {
        $this->_DB=DBUtil::getInstance();
        $this->_StudentProject=new StudentProject();
        $this->_Student=new User();
    }

    public function addMember($StudentProject){
        $ID=$StudentProject->getStudentProjectId();
        $ProjectId=$StudentProject->getProjectId();
        $StudentId=$StudentProject->getStudentId();

        $SQL="INSERT INTO pms_student_project VALUES ('$ID','$StudentId','$ProjectId')";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function getMember($Project){
        $MemberList=array();
        $SQL="SELECT * FROM pms_student_project WHERE pms_student_project.project_id='".$Project->getProjectId()."'";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row) {
            $this->_StudentProject=new StudentProject();
            $this->_StudentProject->setStudentProjectId($row['id']);
            $this->_StudentProject->setStudentId($row['student_id']);
            $this->_StudentProject->setProjectId($row['project_id']);

            $MemberList[]=$this->_StudentProject;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($MemberList);

        return $Result;
    }

    public function getStudent($Student){
        $SQL="SELECT tbl_user.ID,tbl_user.Email,tbl_user.FirstName,tbl_user.LastName FROM tbl_user WHERE tbl_user.ID='".$Student."'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Student=new User();
        $this->_Student->setID($row['ID']);
        $this->_Student->setEmail($row['Email']);
        $this->_Student->setFirstName($row['FirstName']);
        $this->_Student->setLastName($row['LastName']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Student);

        return $Result;
    }

    public function removeMember($Student){
        $SQL="DELETE FROM pms_student_project WHERE pms_student_project.project_id='".$Student->getProjectId()."' 
        AND pms_student_project.student_id='".$Student->getStudentId()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

}
?>

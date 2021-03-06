<!--Assign or remove members to a thesis-->
<?php
// write dao object for each class
include_once './common/class.common.thesis.php';
include_once './util/class.util.php';

class ThesisMemberDao{
    private $_DB;
    private $_StudentThesis;
    private $_SupervisorThesis;
    private $_Student;
    private $_Teacher;

    public function __construct()
    {
        $this->_DB=DBUtil::getInstance();
        $this->_StudentThesis=new StudentThesis();
        $this->_SupervisorThesis=new SupervisorThesis();
        $this->_Teacher=new User();
        $this->_Student=new User();
    }

    public function addMember($StudentThesis){
        $ID=$StudentThesis->getStudentThesisId();
        $ThesisId=$StudentThesis->getThesisId();
        $StudentId=$StudentThesis->getStudentId();

        $SQL="INSERT INTO tms_student_thesis VALUES ('$ID','$StudentId','$ThesisId')";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function addSupervisor($SupervisorThesis){
        $ID=$SupervisorThesis->getSupervisorThesisId();
        $ThesisId=$SupervisorThesis->getThesisId();
        $SupervisorId=$SupervisorThesis->getSupervisorId();

        $SQL="INSERT INTO tms_supervisor_thesis VALUES ('$ID','$SupervisorId','$ThesisId')";
        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function getMember($Thesis){
        $MemberList=array();
        $SQL="SELECT * FROM tms_student_thesis WHERE tms_student_thesis.thesis_id='".$Thesis->getThesisId()."'";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row) {
            $this->_StudentThesis=new StudentThesis();
            $this->_StudentThesis->setStudentThesisId($row['id']);
            $this->_StudentThesis->setStudentId($row['student_id']);
            $this->_StudentThesis->setThesisId($row['thesis_id']);

            $MemberList[]=$this->_StudentThesis;
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

    public function getSupervisor($Thesis){
        $SupervisorList=array();
        $SQL="SELECT * FROM tms_supervisor_thesis WHERE tms_supervisor_thesis.thesis_id='".$Thesis->getThesisId()."'";
        $this->_DB->doQuery($SQL);

        $rows=$this->_DB->getAllRows();
        foreach ($rows as $row) {
            $this->_SupervisorThesis=new SupervisorThesis();
            $this->_SupervisorThesis->setSupervisorThesisId($row['id']);
            $this->_SupervisorThesis->setSupervisorId($row['supervisor_id']);
            $this->_SupervisorThesis->setThesisId($row['thesis_id']);

            $SupervisorList[]=$this->_SupervisorThesis;
        }

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SupervisorList);

        return $Result;
    }

    public function getTeacher($Teacher){
        $SQL="SELECT tbl_user.ID,tbl_user.Email,tbl_user.FirstName,tbl_user.LastName FROM tbl_user WHERE tbl_user.ID='".$Teacher."'";
        $this->_DB->doQuery($SQL);
        $row=$this->_DB->getTopRow();
        $this->_Teacher=new User();
        $this->_Teacher->setID($row['ID']);
        $this->_Teacher->setEmail($row['Email']);
        $this->_Teacher->setFirstName($row['FirstName']);
        $this->_Teacher->setLastName($row['LastName']);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($this->_Teacher);

        return $Result;
    }

    public function removeMember($Student){
        $SQL="DELETE FROM tms_student_thesis WHERE tms_student_thesis.thesis_id='".$Student->getThesisId()."' 
        AND tms_student_thesis.student_id='".$Student->getStudentId()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

    public function removeSupervisor($Supervisor){
        $SQL="DELETE FROM tms_supervisor_thesis WHERE tms_supervisor_thesis.thesis_id='".$Supervisor->getThesisId()."' 
        AND tms_supervisor_thesis.supervisor_id='".$Supervisor->getSupervisorId()."'";

        $SQL=$this->_DB->doQuery($SQL);

        $Result=new Result();
        $Result->setIsSuccess(1);
        $Result->setResultObject($SQL);

        return $Result;
    }

}
?>

<!--Assign or remove members form a project-->
<?php
include_once './util/class.util.php';
include_once '/../dao/class.projectMemberdao.php';

class ProjectMemberBao{
    private $_MemberDao;

    public function __construct()
    {
        $this->_MemberDao=new ProjectMemberDao();
    }

    //add Member
    public function addMember($StudentProject){
        $Result=$this->_MemberDao->addMember($StudentProject);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.addMember($StudentProject)");
        }
        return $Result;
    }

    //get members of the project
    public function getMember($Project){
        $Result=$this->_MemberDao->getMember($Project);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getMember($Project)");
        }
        return $Result;
    }

    //get all students
    public function getStudent($Student){
        $Result=$this->_MemberDao->getStudent($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getStudent($Student)");
        }
        return $Result;
    }

    //remove members from a project
    public function removeMember($Student){
        $Result=$this->_MemberDao->removeMember($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.removeMember($Student)");
        }
        return $Result;
    }
}
?>

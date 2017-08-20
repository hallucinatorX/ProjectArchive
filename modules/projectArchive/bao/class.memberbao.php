<?php

include_once './util/class.util.php';
include_once '/../dao/class.memberdao.php';

class MemberBao{
    private $_MemberDao;

    public function __construct()
    {
        $this->_MemberDao=new MemberDao();
    }

    //add Member
    public function addMember($StudentProject){
        $Result=$this->_MemberDao->addMember($StudentProject);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.addMember($StudentProject)");
        }
        return $Result;
    }

    public function getMember($Project){
        $Result=$this->_MemberDao->getMember($Project);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getMember($Project)");
        }
        return $Result;
    }

    public function getStudent($Student){
        $Result=$this->_MemberDao->getStudent($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.getStudent($Student)");
        }
        return $Result;
    }

    public function removeMember($Student){
        $Result=$this->_MemberDao->removeMember($Student);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in MemberDao.removeMember($Student)");
        }
        return $Result;
    }


}

?>
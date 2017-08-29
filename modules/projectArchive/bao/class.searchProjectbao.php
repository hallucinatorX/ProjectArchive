<!--Search specific project-->
<?php
include_once './util/class.util.php';
include_once '/../dao/class.searchProjectdao.php';

/*
	User Business Object
*/
Class SearchProjectBao
{

    private $_SearchProjectDao;

    public function __construct()
    {
        $this->_SearchProjectDao=new SearchProjectDao();
    }

    //get All Languages
    public function getAllLanguages(){
        $Result=$this->_SearchProjectDao->getAllLanguages();
        
        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in SearchProjectDao.getAllLanguages()");
        }
        return $Result;
    }   

    //get searched project
    public function getSearchedProject(){
        $Result=$this->_SearchProjectDao->getSearchedProject();

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in SearchProjectDao.getSearchedProject()");
        }
        return $Result;
    }

}
?>

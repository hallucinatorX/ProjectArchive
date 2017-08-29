<!--Projects Homepage-->
<?php
include_once './util/class.util.php';
include_once '/../dao/class.projectdao.php';
include_once '/../dao/class.projectHomedao.php';

class ProjectHomeBao{

    private $_ProjectHomeDao;

    public function __construct()
    {
        $this->_ProjectHomeDao=new ProjectHomeDao();
    }

    //get paginated projects
    public function getLimitProject($page,$limit){
        $Result=$this->_ProjectHomeDao->getLimitProject($page,$limit);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ProjectHomeDao.getLimitProject($page,$limit)");
        }

        return $Result;
    }
}
?>

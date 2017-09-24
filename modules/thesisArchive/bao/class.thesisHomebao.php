<!--Thesis Homepage-->
<?php
include_once './util/class.util.php';
include_once '/../dao/class.thesisdao.php';
include_once '/../dao/class.thesisHomedao.php';

class ThesisHomeBao{

    private $_ThesisHomeDao;

    public function __construct()
    {
        $this->_ThesisHomeDao=new ThesisHomeDao();
    }

    //get paginated thesis
    public function getLimitThesis($page,$limit){
        $Result=$this->_ThesisHomeDao->getLimitThesis($page,$limit);

        if(!$Result->getIsSuccess()){
            $Result->setResultObject("Database failure in ThesisHomeDao.getLimitThesis($page,$limit)");
        }

        return $Result;
    }
}
?>

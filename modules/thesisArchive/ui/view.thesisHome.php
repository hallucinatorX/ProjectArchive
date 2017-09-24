<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.thesisHome.blade.php';
include_once './common/class.common.php';
?>

<hr>

<div class="container">

    <!--Thesiss List-->
    <div class="row">
        <?php
        $results_per_page=8;

        if(isset($_GET['page'])&&isset($_GET['limit'])){
            $ThesisList=$getROW->getResultObject();
        }
        else{
            $ThesisList=$_ThesisHomeBao->getLimitThesis(0,$results_per_page)->getResultObject();
        }

        foreach ($ThesisList as $thesis){
            ?>
            <div class="col-lg-3 portfolio-item" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
                <div class="card h-37" style="padding-top: 15px">
                    <a href="<?php echo PageUtil::$THESIS_MEMBER.'?id='.$thesis->getThesisId();?>" style="text-align: center">
                        <img class="card-img-top" src="<?php echo $thesis->getThesisThumbnail();?>" alt="Thesis" style="height: 80px;width: 80px"></a>
                    <div class="card-body">
                        <h4 style="font-size:21px" class="card-title">
                            <a href="<?php echo PageUtil::$THESIS_MEMBER.'?id='.$thesis->getThesisId();?>"><?php echo $thesis->getThesisTitle();?></a>
                        </h4>
                        <p class="card-text" style="padding-top: 5px;text-align: justify"><?php
                            if(strlen($thesis->getThesisDescription())>100){
                                echo substr($thesis->getThesisDescription(),0,100).'...';
                            }
                            else{
                                echo $thesis->getThesisDescription();
                            }
                            ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <!--Pagination-->
    <div class="col-md-12">
        <ul class="pagination justify-content-center">
    <!--        Previous Button-->
            <li class="page-item">
                <a class="page-link" href="<?php if(isset($_GET['page'])&&isset($_GET['limit'])){
                    $result=$_GET['page']-$results_per_page;
                    if ($_GET['page']==0){
                        $result=$_GET['page'];
                    }
                    echo PageUtil::$THESIS_HOME.'?page='.
                        $result.'&limit='.$_GET['limit'];
                }?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

    <!--        Page Buttons-->
            <?php
            if(!isset($_GET['page'])&&!isset($_GET['limit'])){
                $page=1;
            }else{
                $page=$_GET['page'];
            }

            $ThesisNum=count($_ThesisBao->getAllThesis()->getResultObject());
            $number_of_pages=ceil($ThesisNum/$results_per_page);
            for($i=0;$i<$number_of_pages;$i++){
                if (isset($_GET['page'])&&isset($_GET['limit'])) {
                    if ($_GET['page'] == $i * $results_per_page) {
                        ?>
                        <li class="page-item active">
                        <?php
                    } else {
                        ?>
                        <li class="page-item">
                        <?php
                    }
                }
                else {
                    if ($i == 0) {
                        ?>
                        <li class="page-item active">
                        <?php
                    } else {
                        ?>
                        <li class="page-item">
                        <?php
                    }
                }

                ?>
                    <a class="page-link" href="<?php echo PageUtil::$THESIS_HOME.'?page='.$i*$results_per_page.'&limit='.$results_per_page;?>"><?php echo $i+1;?></a>
                </li>
            <?php
                $page++;
            }
            ?>

    <!--        Next Button-->
            <li class="page-item">
                <a class="page-link" href="<?php if(isset($_GET['page'])&&isset($_GET['limit'])){
                    $result=$_GET['page']+$results_per_page;
                    if ($_GET['page']>=$ThesisNum-$results_per_page){
                        $result=$_GET['page'];
                    }
                    echo PageUtil::$THESIS_HOME.'?page='.
                        $result.'&limit='.$_GET['limit'];
                }else{
                    if($ThesisNum>$results_per_page){
                        echo PageUtil::$THESIS_HOME.'?page='.$results_per_page.'&limit='.$results_per_page;
                    }else{
                        echo PageUtil::$THESIS_HOME;
                    }

                }?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div>

</div>

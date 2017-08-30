<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.projectHome.blade.php';
include_once './common/class.common.php';
?>

<hr>

<div class="container">

    <!--Projects List-->
    <div class="row">
        <?php
        $results_per_page=8;

        if(isset($_GET['page'])&&isset($_GET['limit'])){
            $ProjectList=$getROW->getResultObject();
        }
        else{
            $ProjectList=$_ProjectHomeBao->getLimitProject(0,$results_per_page)->getResultObject();
        }

        foreach ($ProjectList as $project){
            ?>
            <div class="col-lg-3 portfolio-item" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
                <div class="card h-37" style="padding-top: 15px">
                    <a href="<?php echo PageUtil::$MEMBER.'?id='.$project->getProjectId();?>" style="text-align: center">
                        <img class="card-img-top" src="<?php echo $project->getProjectThumbnail();?>" alt="Project" style="height: 80px;width: 80px"></a>
                    <div class="card-body">
                        <h4 style="font-size:21px" class="card-title">
                            <a href="<?php echo PageUtil::$MEMBER.'?id='.$project->getProjectId();?>"><?php echo $project->getProjectTitle();?></a>
                        </h4>
                        <p class="card-text" style="padding-top: 5px;text-align: justify"><?php
                            if(strlen($project->getProjectDescription())>100){
                                echo substr($project->getProjectDescription(),0,100).'...';
                            }
                            else{
                                echo $project->getProjectDescription();
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
                    echo PageUtil::$PROJECT_HOME.'?page='.
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

            $ProjectNum=count($_ProjectBao->getAllProjects()->getResultObject());
            $number_of_pages=ceil($ProjectNum/$results_per_page);
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
                    <a class="page-link" href="<?php echo PageUtil::$PROJECT_HOME.'?page='.$i*$results_per_page.'&limit='.$results_per_page;?>"><?php echo $i+1;?></a>
                </li>
            <?php
                $page++;
            }
            ?>

    <!--        Next Button-->
            <li class="page-item">
                <a class="page-link" href="<?php if(isset($_GET['page'])&&isset($_GET['limit'])){
                    $result=$_GET['page']+$results_per_page;
                    if ($_GET['page']>=$ProjectNum-$results_per_page){
                        $result=$_GET['page'];
                    }
                    echo PageUtil::$PROJECT_HOME.'?page='.
                        $result.'&limit='.$_GET['limit'];
                }else{
                    if($ProjectNum>$results_per_page){
                        echo PageUtil::$PROJECT_HOME.'?page='.$results_per_page.'&limit='.$results_per_page;
                    }else{
                        echo PageUtil::$PROJECT_HOME;
                    }

                }?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div>

</div>

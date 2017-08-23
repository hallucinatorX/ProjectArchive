<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.projectHome.blade.php';
include_once './common/class.common.php';
?>

<div class="container">

    <div class="page-header">
        <h1><img src="./resources/img/list.png" alt="Icon" style="height: 45px;width: 45px;">&nbsp;Projects List</h1>
    </div>
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
            <div class="col-lg-3 portfolio-item">
                <div class="card h-37" style="padding-top: 15px">
                    <a href="<?php echo PageUtil::$MEMBER.'?id='.$project->getProjectId();?>" style="text-align: center">
                        <img class="card-img-top" src="resources/img/projectIcon.png" alt="Project" style="height: 100px;width: 100px"></a>
                    <div class="card-body">
                        <h4 style="font-size:21px" class="card-title">
                            <a href="<?php echo PageUtil::$MEMBER.'?id='.$project->getProjectId();?>"><?php echo $project->getProjectTitle();?></a>
                        </h4>
                        <p class="card-text" style="padding-top: 5px"><?php echo substr($project->getProjectDescription(),0,100).'...'; ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

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



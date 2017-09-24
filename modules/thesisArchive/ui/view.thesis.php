<?php
include_once 'blade/view.thesis.blade.php';
include_once './common/class.common.php';
?>

<!--Script for loading course title-->
<script>
    function jsFunction(course) {
        var xhttp;
        if(course==""){
            $('#courseTitle').val("No Course Selected");
        }
        xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function () {
            if(this.readyState==4&&this.status==200){
                $('#courseTitle').val(this.responseText);
            }
        };
        xhttp.open("GET","./modules/thesisArchive/ui/responseText.php?ID="+course,true);
        xhttp.send();
    }
</script>

<hr>

<div class="col-md-12">

    <!--Heading-->
    <div class="panel panel-default col-md-6 col-md-offset-3" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
        <div class="panel-heading" style=" text-align: center">
            <strong style="font-size: large"><img src="./resources/img/createproject.png" alt="Icon" style="height: 30px;width: 30px;">&nbsp;Create Thesis</strong>
        </div>
        <div class="panel-body">

            <!--Thesis Creation Form-->
            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                <!--            Title-->
                <div class="form-group">
                    <label for="title" class="control-label col-md-3">Title :</label>
                    <div class=" col-md-7">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Thesis Title" value="<?php
                        if (isset($_GET['edit'])) echo $getRow->getThesisTitle();
                        elseif (isset($_POST['create'])) echo $_POST['title'];
                        ?>" required>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['title'])) echo '*Title is required';?></span>
                    </div>
                </div>

                <!--            YearDDL-->
                <div class="form-group">
                    <label for="year_id" class="control-label col-md-3">Year :</label>
                    <div class="col-md-7">
                        <select name="year_id" id="year_id" class="form-control" required>
                            <option value="" selected="selected" disabled>Select Year</option>
                            <?php
                            $Result=$_ThesisBao->getAllYears();
                            if($Result->getIsSuccess()){
                                $YearList=$Result->getResultObject();
                                foreach ($YearList as $year){
                                    ?>
                                    <option value="<?php echo $year->getYearId();?>" <?php
                                    if (isset($_GET['edit'])&& $year->getYearId()==$getRow->getThesisYearId()) echo 'selected="selected"';
                                    elseif (isset($_POST['create'])&&!empty($_POST['year_id'])&&$year->getYearId()==$_POST['year_id']) echo 'selected="selected"'
                                    ?>><?php echo $year->getYearName();?></option>
                                    <?php
                                }
                            }else{
                                echo $Result->getResultObject();
                            }
                            ?>
                        </select>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['year_id'])) echo '*Year is required';?></span>
                    </div>
                </div>

                <!--            TermDDL-->
                <div class="form-group">
                    <label for="term_id" class="control-label col-md-3">Term :</label>
                    <div class="col-md-7">
                        <select name="term_id" id="term_id" class="form-control" required>
                            <option value="" selected="selected" disabled>Select Term</option>
                            <?php
                            $Result=$_ThesisBao->getAllTerms();
                            if($Result->getIsSuccess()) {
                                $TermList = $Result->getResultObject();
                                foreach ($TermList as $term){
                                    ?>
                                    <option value="<?php echo $term->getTermId();?>" <?php
                                    if (isset($_GET['edit'])&&$term->getTermId()==$getRow->getThesisTermId()) echo 'selected="selected"';
                                    elseif (isset($_POST['create'])&&!empty($_POST['term_id'])&&$term->getTermId()==$_POST['term_id'])echo 'selected="selected"';
                                    ?>><?php echo $term->getTermName();?></option>
                                    <?php
                                }
                            }else{
                                echo $Result->getResultObject();
                            }
                            ?>
                        </select>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['term_id'])) echo '*Term is required';?></span>
                    </div>
                </div>

                <!--            CourseDDL-->
                <div class="form-group">
                    <label for="course_id" class="control-label col-md-3">Course No :</label>
                    <div class="col-md-7">
                        <select name="course_id" id="course_id" class="form-control" onchange="jsFunction(this.value);" required>
                            <option value="" selected="selected" disabled>Select Course</option>
                            <?php
                            $Result=$_ThesisBao->getAllCourses();
                            if($Result->getIsSuccess()){
                                $CourseList=$Result->getResultObject();
                                foreach ($CourseList as $course){
                                    ?>
                                    <option value="<?php echo $course->getCourseId();?>" <?php
                                    if (isset($_GET['edit'])&&$course->getCourseId()==$getRow->getThesisCourseId()) echo 'selected="selected"';
                                    elseif (isset($_POST['create'])&&!empty($_POST['course_id'])&&$course->getCourseId()==$_POST['course_id']) echo 'selected="selected"';
                                    ?>><?php echo $course->getCourseNo();?></option>
                                    <?php
                                }
                            }else{
                                echo $Result->getResultObject();
                            }
                            ?>
                        </select>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['course_id'])) echo '*Course is required';?></span>
                    </div>
                </div>

                <!--            Course Title-->
                <div class="form-group">
                    <label for="courseTitle" class="control-label col-md-3">Course Title:</label>
                    <div class="col-md-7">
                        <input type="text" name="courseTitle" id="courseTitle" class="form-control" value="<?php
                        if(isset($_GET['edit'])) echo $Result=$_ThesisBao->getCourse($getRow->getThesisCourseId())->getResultObject()->getCourseTitle();
                        elseif (isset($_POST['create'])&&!empty($_POST['course_id'])) echo $Result=$_ThesisBao->getCourse($_POST['course_id'])->getResultObject()->getCourseTitle();
                        ?>" disabled >
                    </div>
                </div>

                <!--            DisciplineDDL-->
                <div class="form-group">
                    <label for="discipline_id" class="control-label col-md-3">Discipline :</label>
                    <div class="col-md-7">
                        <select name="discipline_id" id="discipline_id" class="form-control" required>
                            <option value="" selected="selected" disabled>Select Discipline</option>
                            <?php
                            $Result=$_ThesisBao->getAllDisciplines();
                            if($Result->getIsSuccess()){
                                $DisciplineList=$Result->getResultObject();
                                foreach ($DisciplineList as $discipline){
                                    ?>
                                    <option value="<?php echo $discipline->getDisciplineId();?>"<?php
                                    if (isset($_GET['edit'])&&$discipline->getDisciplineId()==$getRow->getThesisDisciplineId()) echo 'selected="selected"';
                                    elseif (isset($_POST['create'])&&!empty($_POST['discipline_id'])&&$discipline->getDisciplineId()==$_POST['discipline_id']) echo 'selected="selected"';
                                    ?>><?php echo $discipline->getDisciplineName();?></option>
                                    <?php
                                }
                            }
                            else{
                                echo $Result->getResultObject();
                            }
                            ?>
                        </select>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['discipline_id'])) echo '*Discipline is required';?></span>
                    </div>
                </div>

                <!--            Description-->
                <div class="form-group">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div class=" col-md-7">
                        <textarea name="description" id="description" rows="7" class="form-control" required><?php
                            if (isset($_GET['edit'])) echo $getRow->getThesisDescription();
                            elseif (isset($_POST['create'])&&!empty($_POST['description'])) echo $_POST['description'];
                            ?></textarea>
                        <span style="color: darkred"><?php if (isset($_POST['create'])&&empty($_POST['description'])) echo '*Description is required';?></span>
                    </div>
                </div>

                <!--Report Src-->
                <div class="form-group">
                    <div class="col-md-7">
                        <input type="hidden" name="reportsrc" id="reportsrc" class="form-control" value="<?php
                        if(isset($_GET['edit'])) echo $getRow->getThesisLink();
                        ?>">
                    </div>
                </div>

                <!--Report-->
                <div class="form-group">
                    <label for="report" class="control-label col-md-3">Report :</label>
                    <div class="col-md-4">
                        <input type="file" name="report" id="report"<?php if (!isset($_GET['edit'])) echo 'required';?>>
                    </div>
                    <div class="col-md-3 <?php if(isset($_GET['edit'])) echo 'report';?>">
                        <strong><span class="text-success">
                            <?php
                            if (isset($_GET['edit'])) {
                                echo $getRow->getThesisTitle().'.pdf';
                            }
                            ?>
                        </span></strong>
                    </div>
                </div>

                <!--Thumbnail Src-->
                <div class="form-group">
                    <div class="col-md-7">
                        <input type="hidden" name="thumbnailsrc" id="thumbnailsrc" class="form-control" value="<?php
                        if(isset($_GET['edit'])) echo $getRow->getThesisThumbnail();
                        ?>">
                    </div>
                </div>

                <!--Thumbnail-->
                <div class="form-group">
                    <label for="thumbnail" class="control-label col-md-3">Thumbnail :</label>
                    <div class="col-md-4">
                        <input type="file" name="thumbnail" id="thumbnail"<?php if (!isset($_GET['edit'])) echo 'required';?>>
                    </div>
                    <div class="col-md-1 <?php if(isset($_GET['edit'])) echo 'thumbnail';?>">
                        <img src="<?php
                        if (isset($_GET['edit'])) echo $getRow->getThesisThumbnail();
                        ?>">
                    </div>
                </div>

                <br>

                <!--Button-->
                <div class="form-group">
                    <?php
                    if (!isset($_GET['edit'])){
                        ?>
                        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" name="create" value="Create">
                    <?php
                    }else{
                        ?>
                        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" name="update" value="Update">
                    <?php
                    }
                    ?>
                </div>

            </form>
        </div>
    </div>

    <!--Display all thesis-->
    <div class="col-md-12">
        <hr>
    </div>
    <div class="panel col-md-12" style="max-height: 730px; overflow:auto">
        <table class="table table-striped table-bordered table-responsive">
            <!--Header Row-->
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th style="text-align: center">Report</th>
                <th style="text-align: center">Year</th>
                <th style="text-align: center">Term</th>
                <th>Course</th>
                <th>Discipline</th>
                <th style="text-align: center">Created At</th>
                <th style="text-align: center">Updated At</th>
                <th style="text-align: center"><img src="./resources/img/edit.ico" alt="Edit" style="height: 20px;width: 20px"></th>
                <th style="text-align: center"><img src="./resources/img/delete.png" alt="Delete" style="height: 20px;width: 20px"></th>
            </tr>

            <!--Table Cells-->
            <?php
            $Result=$_ThesisBao->getAllThesis();
            if($Result->getIsSuccess()){
                $ThesisList=$Result->getResultObject();

                foreach ($ThesisList as $thesis) {
                    ?>
                    <tr>
                        <td><a href="thesis_member.php?id=<?php echo $thesis->getThesisId();?>"><img src="<?php echo $thesis->getThesisThumbnail();?>" alt="Icon" style="height: 20px;width: 20px;"><?php
                                echo ' '.$thesis->getThesisTitle(); ?></a></td>

                        <td><?php if(strlen($thesis->getThesisDescription())>50){
                                echo substr($thesis->getThesisDescription(),0,50).'...';
                            }else{
                                echo $thesis->getThesisDescription();
                            }  ?></td>

                        <td style="text-align: center"><a href="<?php echo $thesis->getThesisLink(); ?>" style="text-decoration: none"><?php
                                if(strlen($thesis->getThesisTitle())>40){
                                    echo substr($thesis->getThesisTitle(),0,40).'...'.'.pdf' ;
                                }else{
                                    echo $thesis->getThesisTitle().'.pdf';
                                } ?></a></td>

                        <td style="text-align: center"><?php echo $Result=$_ThesisBao->getYear($thesis->getThesisYearId())->getResultObject()->getYearName();?></td>

                        <td style="text-align: center"><?php echo $Result=$_ThesisBao->getTerm($thesis->getThesisTermId())->getResultObject()->getTermName();?></td>

                        <td><?php echo $Result=$_ThesisBao->getCourse($thesis->getThesisCourseId())->getResultObject()->getCourseTitle();?></td>

                        <td><?php echo $Result=$_ThesisBao->getDiscipline($thesis->getThesisDisciplineId())->getResultObject()->getDisciplineName();?></td>

                        <td style="text-align: center"><?php echo $thesis->getThesisCreatedAt();?></td>

                        <td style="text-align: center"><?php echo $thesis->getThesisUpdatedAt();?></td>

                        <td style="text-align: center"><a href="?edit=<?php echo $thesis->getThesisId();?>" onclick="return confirm('sure to edit !');">edit</a></td>

                        <td style="text-align: center"><a href="?del=<?php echo $thesis->getThesisId();?>" style="color: darkred" onclick="return confirm('sure to delete !');">delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>

</div>

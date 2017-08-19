<?php
include_once 'blade/view.project.blade.php';
include_once './common/class.common.php';
?>
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
        xhttp.open("GET","./modules/projectArchive/ui/responseText.php?ID="+course,true);
        xhttp.send();
    }
</script>

<hr>
<div class="panel panel-default col-md-6 col-md-offset-3">
    <div class="panel-heading" style=" text-align: center">
        <strong style="font-size: large">Create Project</strong>
    </div>
    <div class="panel-body">
        <form method="post" class="form-horizontal">
<!--            Title-->
            <div class="form-group">
                <label for="title" class="control-label col-md-3">Title :</label>
                <div class=" col-md-7">
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
            </div>
<!--            Description-->
           <div class="form-group">
                <label for="description" class="control-label col-md-3">Description :</label>
                <div class=" col-md-7">
                <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
            </div>
<!--            Link-->
            <div class="form-group">
                <label for="link" class="control-label col-md-3">Link :</label>
                <div class="col-md-7">
                    <input type="text" name="link" id="link" class="form-control" required>
                </div>
            </div>
<!--            Language-->
            <div class="form-group">
                <label for="language" class="control-label col-md-3">Language :</label>
                <div class="col-md-7">
                    <input type="text" name="language" id="language" class="form-control" required>
                </div>
            </div>

<!--            YearDDL-->
            <div class="form-group">
                <label for="year" class="control-label col-md-3">Year :</label>
                <div class="col-md-7">
                    <select name="year" id="year" class="form-control">
                        <option value="">Select Year</option>
                        <?php
                        $Result=$_ProjectBao->getAllYears();
                        if($Result->getIsSuccess()){
                            $YearList=$Result->getResultObject();
                            foreach ($YearList as $year){
                            ?>
                            <option value="<?php echo $year->getYearId()?>"><?php echo $year->getYearName();?></option>
                                <?php
                            }
                        }else{
                            echo $Result->getResultObject();
                        }
                        ?>
                    </select>
                </div>
            </div>

<!--            TermDDL-->
            <div class="form-group">
                <label for="term" class="control-label col-md-3">Term :</label>
                <div class="col-md-7">
                    <select name="term" id="term" class="form-control">
                        <option value="">Select Term</option>
                        <?php
                        $Result=$_ProjectBao->getAllTerms();
                        if($Result->getIsSuccess()) {
                            $TermList = $Result->getResultObject();
                            foreach ($TermList as $term){
                                ?>
                                <option value="<?php echo $term->getTermId();?>"><?php echo $term->getTermName();?></option>
                        <?php
                            }
                        }else{
                            echo $Result->getResultObject();
                        }
                        ?>
                    </select>
                </div>
            </div>

<!--            CourseDDL-->
            <div class="form-group">
                <label for="courseNo" class="control-label col-md-3">Course No :</label>
                <div class="col-md-7">
                    <select name="courseNo" id="courseNo" class="form-control" onchange="jsFunction(this.value);">
                        <option value="">Select Course</option>
                        <?php
                        $Result=$_ProjectBao->getAllCourses();
                        if($Result->getIsSuccess()){
                            $CourseList=$Result->getResultObject();
                            foreach ($CourseList as $course){
                                ?>
                                <option value="<?php echo $course->getCourseId();?>"><?php echo $course->getCourseNo();?></option>
                        <?php
                            }
                        }else{
                            echo $Result->getResultObject();
                        }
                        ?>
                    </select>
                </div>
            </div>
<!--            Course Title-->
            <div class="form-group">
                <label for="courseTitle" class="control-label col-md-3">Course Title:</label>
                <div class="col-md-7">
                    <input type="text" name="courseTitle" id="courseTitle" class="form-control" disabled >
                </div>
            </div>

<!--            DisciplineDDL-->
            <div class="form-group">
                <label for="discipline" class="control-label col-md-3">Discipline :</label>
                <div class="col-md-7">
                    <select name="discipline" id="discipline" class="form-control">
                        <option value="">Select Discipline</option>
                        <?php
                        $Result=$_ProjectBao->getAllDisciplines();
                        if($Result->getIsSuccess()){
                            $DisciplineList=$Result->getResultObject();
                            foreach ($DisciplineList as $discipline){
                                ?>
                                <option value="<?php echo $discipline->getDisciplineId();?>"><?php echo $discipline->getDisciplineName();?></option>
                        <?php
                            }
                        }
                        else{
                            echo $Result->getResultObject();
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="teacher" class="control-label col-md-3">Teacher :</label>
                <div class="col-md-7">
                    <select name="teacher" id="teacher" class="form-control">
                        <option value="1">Teacher1</option>
                        <option value="2">Teacher2</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" name="create" value="Create">
            </div>
        </form>

<!--        <table class="table table-bordered">-->
<!--            <tr>-->
<!--                <th>-->
<!--                    Title-->
<!--                </th>-->
<!--                <th>-->
<!--                    Description-->
<!--                </th>-->
<!--            </tr>-->
<!---->
<!--            --><?php
//            $Result=$_ProjectBao->getAllProject();
//
//            if($Result->getIsSuccess()) {
//                $ProjectList = $Result->getResultObject();
//
//                foreach ($ProjectList as $Project) {
//                    ?>
<!--                    <tr>-->
<!--                        <td>-->
<!--                            --><?php //echo $Project->getTitle(); ?>
<!--                        </td>-->
<!--                        <td>-->
<!--                            --><?php //echo $Project->getDescription(); ?>
<!--                        </td>-->
<!--                    </tr>-->
<!--                    --><?php
//                }
//            }
//            else{
//                echo $Result->getResultObject();
//            }
//            ?>
<!--        </table>-->
    </div>
</div>

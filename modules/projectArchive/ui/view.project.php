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
<div class="panel col-md-12">
    <div class="panel panel-primary col-md-6 col-md-offset-3">
        <div class="panel-heading" style=" text-align: center">
            <strong style="font-size: large"><img src="./resources/img/createproject.png" alt="Icon" style="height: 30px;width: 30px;">&nbsp;Create Project</strong>
        </div>
        <div class="panel-body">
            <form method="post" class="form-horizontal">
                <!--            Title-->
                <div class="form-group">
                    <label for="title" class="control-label col-md-3">Title :</label>
                    <div class=" col-md-7">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Project Title" value="<?php
                        if (isset($_GET['edit'])) echo $getRow->getProjectTitle();?>" required>
                    </div>
                </div>

                <!--            Link-->
                <div class="form-group">
                    <label for="link" class="control-label col-md-3">Link :</label>
                    <div class="col-md-7">
                        <input type="url" name="link" id="link" class="form-control" placeholder="Project Link" value="<?php
                        if (isset($_GET['edit'])) echo $getRow->getProjectLink();?>" required>
                    </div>
                </div>
                <!--            Language-->
                <div class="form-group">
                    <label for="language" class="control-label col-md-3">Language :</label>
                    <div class="col-md-7">
                        <input type="text" name="language" id="language" class="form-control" placeholder="Project Language" value="<?php
                        if (isset($_GET['edit'])) echo $getRow->getProjectLanguage();?>" required>
                    </div>
                </div>

                <!--            YearDDL-->
                <div class="form-group">
                    <label for="year_id" class="control-label col-md-3">Year :</label>
                    <div class="col-md-7">
                        <select name="year_id" id="year_id" class="form-control" required>
                            <option value="">Select Year</option>
                            <?php
                            $Result=$_ProjectBao->getAllYears();
                            if($Result->getIsSuccess()){
                                $YearList=$Result->getResultObject();
                                foreach ($YearList as $year){
                                    ?>
                                    <option value="<?php echo $year->getYearId()?>" <?php
                                    if (isset($_GET['edit'])&& $year->getYearId()==$getRow->getProjectYearId()) echo 'selected="selected"'
                                    ?>"><?php echo $year->getYearName();?></option>
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
                    <label for="term_id" class="control-label col-md-3">Term :</label>
                    <div class="col-md-7">
                        <select name="term_id" id="term_id" class="form-control" required>
                            <option value="">Select Term</option>
                            <?php
                            $Result=$_ProjectBao->getAllTerms();
                            if($Result->getIsSuccess()) {
                                $TermList = $Result->getResultObject();
                                foreach ($TermList as $term){
                                    ?>
                                    <option value="<?php echo $term->getTermId();?>" <?php
                                    if (isset($_GET['edit'])&&$term->getTermId()==$getRow->getProjectTermId()) echo 'selected="selected"'
                                    ?>><?php echo $term->getTermName();?></option>
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
                    <label for="course_id" class="control-label col-md-3">Course No :</label>
                    <div class="col-md-7">
                        <select name="course_id" id="course_id" class="form-control" onchange="jsFunction(this.value);" required>
                            <option value="">Select Course</option>
                            <?php
                            $Result=$_ProjectBao->getAllCourses();
                            if($Result->getIsSuccess()){
                                $CourseList=$Result->getResultObject();
                                foreach ($CourseList as $course){
                                    ?>
                                    <option value="<?php echo $course->getCourseId();?>" <?php
                                    if (isset($_GET['edit'])&&$course->getCourseId()==$getRow->getProjectCourseId()) echo 'selected="selected"'
                                    ?>><?php echo $course->getCourseNo();?></option>
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
                        <input type="text" name="courseTitle" id="courseTitle" class="form-control" value="<?php
                        if(isset($_GET['edit'])) echo $Result=$_ProjectBao->getCourse($getRow->getProjectCourseId())->getResultObject()->getCourseTitle();
                        ?>" disabled >
                    </div>
                </div>

                <!--            DisciplineDDL-->
                <div class="form-group">
                    <label for="discipline_id" class="control-label col-md-3">Discipline :</label>
                    <div class="col-md-7">
                        <select name="discipline_id" id="discipline_id" class="form-control" required>
                            <option value="">Select Discipline</option>
                            <?php
                            $Result=$_ProjectBao->getAllDisciplines();
                            if($Result->getIsSuccess()){
                                $DisciplineList=$Result->getResultObject();
                                foreach ($DisciplineList as $discipline){
                                    ?>
                                    <option value="<?php echo $discipline->getDisciplineId();?>"<?php
                                    if (isset($_GET['edit'])&&$discipline->getDisciplineId()==$getRow->getProjectDisciplineId()) echo 'selected="selected"'
                                    ?>><?php echo $discipline->getDisciplineName();?></option>
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
                    <label for="teacher_id" class="control-label col-md-3">Teacher :</label>
                    <div class="col-md-7">
                        <select name="teacher_id" id="teacher_id" class="form-control" required>
                            <option value="">Select Teacher</option>
                            <?php
                            $Result=$_ProjectBao->getAllTeachers();
                            if($Result->getIsSuccess()){
                                $TeacherList=$Result->getResultObject();
                                foreach ($TeacherList as $teacher) {
                                    ?>
                                    <option value="<?php echo $teacher->getID();?>"<?php
                                    if (isset($_GET['edit'])&&$teacher->getId()==$getRow->getProjectTeacherId()) echo 'selected="selected"'
                                    ?>><?php echo $teacher->getFirstName().' '.$teacher->getLastName();?></option>
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

                <!--            Description-->
                <div class="form-group">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div class=" col-md-7">
                        <textarea name="description" id="description" rows="7" class="form-control" required><?php
                            if (isset($_GET['edit'])) echo $getRow->getProjectDescription();?></textarea>
                    </div>
                </div>


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

    <!--Display all projects-->
    <div class="panel-body">
        <table class="table table-striped table-bordered table-responsive">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Language</th>
                <th>Year</th>
                <th>Term</th>
                <th>Course</th>
                <th>Discipline</th>
                <th>Teacher</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th style="text-align: center"><img src="./resources/img/edit.ico" alt="Edit" style="height: 20px;width: 20px"></th>
                <th style="text-align: center"><img src="./resources/img/delete.png" alt="Delete" style="height: 20px;width: 20px"></th>
            </tr>
            <?php
            $Result=$_ProjectBao->getAllProjects();
            if($Result->getIsSuccess()){
                $ProjectList=$Result->getResultObject();

                foreach ($ProjectList as $project) {
                    ?>
                    <tr>
                        <td><a href="member.php?id=<?php echo $project->getProjectId();?>"><img src="./resources/img/projectIcon.png" alt="Icon" style="height: 20px;width: 20px;"><?php
                                echo ' '.$project->getProjectTitle(); ?></a></td>

                        <td><?php if(strlen($project->getProjectDescription())>50){
                                echo substr($project->getProjectDescription(),0,50).'...';
                            }else{
                                echo $project->getProjectDescription();
                            }  ?></td>

                        <td style="text-align: center"><a href="<?php echo $project->getProjectLink(); ?>" style="text-decoration: none"><?php
                                if(strlen($project->getProjectLink())>40){
                                    echo substr($project->getProjectLink(),0,40).'...' ;
                                }else{
                                    echo $project->getProjectLink();
                                } ?></a></td>

                        <td style="text-align: center"><?php echo $project->getProjectLanguage();?></td>

                        <td style="text-align: center"><?php echo $Result=$_ProjectBao->getYear($project->getProjectYearId())->getResultObject()->getYearName();?></td>

                        <td style="text-align: center"><?php echo $Result=$_ProjectBao->getTerm($project->getProjectTermId())->getResultObject()->getTermName();?></td>

                        <td><?php echo $Result=$_ProjectBao->getCourse($project->getProjectCourseId())->getResultObject()->getCourseTitle();?></td>

                        <td><?php echo $Result=$_ProjectBao->getDiscipline($project->getProjectDisciplineId())->getResultObject()->getDisciplineName();?></td>

                        <td><?php $Result=$_ProjectBao->getTeacher($project->getProjectTeacherId())->getResultObject();
                        echo $Result->getFirstName().' '.$Result->getLastName();?></td>

                        <td style="text-align: center"><?php echo $project->getProjectCreatedAt();?></td>

                        <td style="text-align: center"><?php echo $project->getProjectUpdatedAt();?></td>

                        <td style="text-align: center"><a href="?edit=<?php echo $project->getProjectId();?>" onclick="return confirm('sure to edit !');">edit</a></td>

                        <td style="text-align: center"><a href="?del=<?php echo $project->getProjectId();?>" style="color: darkred" onclick="return confirm('sure to delete !');">delete</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>

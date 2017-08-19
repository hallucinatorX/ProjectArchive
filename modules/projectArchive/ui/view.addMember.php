<?php
include_once 'blade/view.addMember.blade.php';
include_once './common/class.common.php';
?>
<script>
    function rmFunction() {
        $('#shortDescription').hide();
        $('#longDescription').show();
    }
    
    function serFunction(emailStr) {
        if(emailStr.length==0){
            $('#searchStudent').html("");
            $('#searchStudent').style.border="0px";
            return;
        }
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function () {
            if(this.readyState==4&&this.status==200){
                $('#searchStudent').html(this.responseText);
                $('#searchStudent').style.border="1px solid";
            }
        }
        xmlhttp.open("GET","./modules/projectArchive/ui/searchResponse.php?key="+emailStr,true);
        xmlhttp.send();
    }
</script>

<hr>
<div class="panel col-md-12">
    <div class="panel panel-primary col-md-6 col-md-offset-3">
        <div class="panel-heading" style=" text-align: center">
            <strong style="font-size: large"><img src="./resources/img/projectIcon2.png" alt="Icon" style="height: 30px;width: 30px;">&nbsp;<?php
                $Project->setProjectId($_GET['id']);
                $Result=$_ProjectBao->getProject($Project)->getResultObject();
                echo $Result->getProjectTitle()?></strong>
        </div>
        <div class="panel-body">

            <div class="form-horizontal">

                <div id="shortDescription" class="form-group">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div id="description" class=" control-label col-md-8" style="text-align: justify">
                        <?php
                        if(strlen($Result->getProjectDescription())>250){
                            echo substr($Result->getProjectDescription(),0,250).'...'.'<a href="#" onclick="rmFunction();">Read more</a>';
                        }
                        else{
                            echo $Result->getProjectDescription();
                        }
                        ?>
                    </div>
                </div>

                <div id="longDescription" class="form-group" style="display: none">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div id="description" class=" control-label col-md-8" style="text-align: justify">
                        <?php
                        echo $Result->getProjectDescription();
                        ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="link" class="control-label col-md-3">Link :</label>
                    <div id="link" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo '<a href="'.$Result->getProjectLink().'">'.$Result->getProjectLink().'</a>';
                        ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="language" class="control-label col-md-3">Language :</label>
                    <div id="language" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $Result->getProjectLanguage();
                        ?>
                    </div>
                </div>


                <div class="form-group">
                    <label for="year_id" class="control-label col-md-3">Year :</label>
                    <div id="year_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ProjectBao->getYear($Result->getProjectYearId())->getResultObject()->getYearName();
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="term_id" class="control-label col-md-3">Term :</label>
                    <div id="term_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ProjectBao->getTerm($Result->getProjectTermId())->getResultObject()->getTermName();
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="course_id" class="control-label col-md-3">Course :</label>
                    <div id="course_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ProjectBao->getCourse($Result->getProjectCourseId())->getResultObject()->getCourseTitle();
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="discipline_id" class="control-label col-md-3">Discipline :</label>
                    <div id="discipline_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ProjectBao->getDiscipline($Result->getProjectDisciplineId())->getResultObject()->getDisciplineName();
                        ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="teacher_id" class="control-label col-md-3">Teacher :</label>
                    <div id="teacher_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        $Name=$_ProjectBao->getTeacher($Result->getProjectTeacherId())->getResultObject();
                        echo $Name->getFirstName().' '.$Name->getLastName();
                        ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="created_at" class="control-label col-md-3">Created At :</label>
                    <div id="created_at" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo date_format(new DateTime($Result->getProjectCreatedAt()),"d-M-Y").' '.'at'.' '.date_format(new DateTime($Result->getProjectCreatedAt()),"h:i:sa");
                        ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="updated_at" class="control-label col-md-3">Updated At :</label>
                    <div id="updated_at" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo date_format(new DateTime($Result->getProjectUpdatedAt()),"d-M-Y").' '.'at'.' '.date_format(new DateTime($Result->getProjectUpdatedAt()),"h:i:sa");
                        ?>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="member" class="control-label col-md-3">Member(s) :</label>
                    <div id="member" class="control-label col-md-8" style="text-align:justify">
                        <li>asdsad</li>
                        <li>asfsad</li>
                    </div>
                </div>

                <hr>
                <div class="form-group">
                    <label for="student_id" class="control-label col-md-3">Add Member :</label>
                    <div class="ui-widgt col-md-6">
                        <input type="email" name="student_id" id="student_id" class="form-control" onkeyup="serFunction(this.value);" required>
                        <div id="searchStudent" class="control-label" style="text-align: left"></div>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-2">Add</button>
                </div>

            </div>
        </div>
    </div>

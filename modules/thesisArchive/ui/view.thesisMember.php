<?php
include_once 'blade/view.thesisMember.blade.php';
include_once './common/class.common.php';
?>

<!--Script for searching and adding members-->
<script>
    function rmFunction() {
        $('#shortDescription').hide();
        $('#longDescription').show();
    }

    function addStudentFunction(emailStr) {
        var val=$('#pid').val();
        if(emailStr.length==0){
            $('#addStudent').html("");
            $('#addStudent').style.border="0px";
            return;
        }
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function () {
            if(this.readyState==4&&this.status==200){
                $('#addStudent').html(this.responseText);
                $('#addStudent').style.border="1px solid";
            }
        }
        xmlhttp.open("GET","./modules/thesisArchive/ui/addResponse.php?key="+emailStr+"&pid="+val,true);
        xmlhttp.send();
    }

    function addSupervisorFunction(emailStr) {
        var val=$('#pid').val();
        if(emailStr.length==0){
            $('#addSupervisor').html("");
            $('#addSupervisor').style.border="0px";
            return;
        }
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function () {
            if(this.readyState==4&&this.status==200){
                $('#addSupervisor').html(this.responseText);
                $('#addSupervisor').style.border="1px solid";
            }
        }
        xmlhttp.open("GET","./modules/thesisArchive/ui/addResponse2.php?key="+emailStr+"&pid="+val,true);
        xmlhttp.send();
    }
</script>

<hr>

<div class="col-md-12">
    <div class="panel panel-default col-md-6 col-md-offset-3" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">
        <div class="panel-heading" style=" text-align: center">
            <strong style="font-size: large"><img src="<?php
                $Thesis->setThesisId($_GET['id']);
                $Result=$_ThesisBao->getThesis($Thesis)->getResultObject();
                echo $Result->getThesisThumbnail();?>" alt="Icon" style="height: 30px;width: 30px;">&nbsp;<?php
                echo $Result->getThesisTitle()?></strong>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">

                <!--Hidden Id-->
                <div class="form-group">
                    <div class=" col-md-7">
                        <input type="hidden" name="pid" id="pid" class="form-control" value="<?php
                        echo $Result->getThesisId(); ?>">
                    </div>
                </div>

                <!--Short Description-->
                <div id="shortDescription" class="form-group">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div id="description" class=" control-label col-md-8" style="text-align: justify">
                        <?php
                        if(strlen($Result->getThesisDescription())>250){
                            echo substr($Result->getThesisDescription(),0,250).'...'.'<a href="#" onclick="rmFunction();">Read more</a>';
                        }
                        else{
                            echo $Result->getThesisDescription();
                        }
                        ?>
                    </div>
                </div>

                <!--Long Description-->
                <div id="longDescription" class="form-group" style="display: none">
                    <label for="description" class="control-label col-md-3">Description :</label>
                    <div id="description" class=" control-label col-md-8" style="text-align: justify">
                        <?php
                        echo $Result->getThesisDescription();
                        ?>
                    </div>
                </div>

                <!--Link-->
                <div class="form-group">
                    <label for="link" class="control-label col-md-3">Report :</label>
                    <div id="link" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo '<a href="'.$Result->getThesisLink().'">'.$Result->getThesisTitle().'.pdf'.'</a>';
                        ?>
                    </div>
                </div>

                <!--Year-->
                <div class="form-group">
                    <label for="year_id" class="control-label col-md-3">Year :</label>
                    <div id="year_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ThesisBao->getYear($Result->getThesisYearId())->getResultObject()->getYearName();
                        ?>
                    </div>
                </div>

                <!--Term-->
                <div class="form-group">
                    <label for="term_id" class="control-label col-md-3">Term :</label>
                    <div id="term_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ThesisBao->getTerm($Result->getThesisTermId())->getResultObject()->getTermName();
                        ?>
                    </div>
                </div>

                <!--Course-->
                <div class="form-group">
                    <label for="course_id" class="control-label col-md-3">Course :</label>
                    <div id="course_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ThesisBao->getCourse($Result->getThesisCourseId())->getResultObject()->getCourseTitle();
                        ?>
                    </div>
                </div>

                <!--Discipline-->
                <div class="form-group">
                    <label for="discipline_id" class="control-label col-md-3">Discipline :</label>
                    <div id="discipline_id" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo $_ThesisBao->getDiscipline($Result->getThesisDisciplineId())->getResultObject()->getDisciplineName();
                        ?>
                    </div>
                </div>

                 <!--Supervisor(s)-->
                <div class="form-group">
                    <label for="supervisor" class="control-label col-md-3">Supervisor(s) :</label>
                    <div id="supervisor" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        $SupervisorList=$_MemberBao->getSupervisor($Thesis)->getResultObject();
                        if ($SupervisorList!=null) {
                            foreach ($SupervisorList as $supervisor) {
                                ?>
                                <div class="col-md-12">
                                <li class="col-md-6"><?php $Name = $_MemberBao->getTeacher($supervisor->getSupervisorId())->getResultObject();
                                    echo $Name->getFirstName() . ' ' . $Name->getLastName();?>
                                    <?php echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;(<a href="user_details.php?id='.$Name->getEmail().'">' . $Name->getEmail() . '</a>)' ?></li>
                                    <?php
                                    if (isset($_SESSION['login.php'])) {
                                        ?>
                                        <ul class="col-md-5">
                                            <a href="?id=<?php echo $Result->getThesisId(); ?>&ruid2=<?php echo $Name->getEmail(); ?>"
                                               style="text-align: right" onclick="return confirm('sure to remove !!');">
                                                <img src="./resources/img/removeMember.ico" alt="Edit"
                                                     style="height: 20px;width: 20px">
                                            </a>
                                        </ul>
                                        <?php
                                    }
                                        ?>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <?php
                            }
                        }else{
                            echo "No supervisor assigned";
                        }
                        ?>
                    </div>
                </div>

                <!--CreatedAt-->
                <div class="form-group">
                    <label for="created_at" class="control-label col-md-3">Created At :</label>
                    <div id="created_at" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo date_format(new DateTime($Result->getThesisCreatedAt()),"d-M-Y").' '.'at'.' '.date_format(new DateTime($Result->getThesisCreatedAt()),"h:i:sa");
                        ?>
                    </div>
                </div>

                <!--UpdatedAt-->
                <div class="form-group">
                    <label for="updated_at" class="control-label col-md-3">Updated At :</label>
                    <div id="updated_at" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        echo date_format(new DateTime($Result->getThesisUpdatedAt()),"d-M-Y").' '.'at'.' '.date_format(new DateTime($Result->getThesisUpdatedAt()),"h:i:sa");
                        ?>
                    </div>
                </div>

                <!--Member(s)-->
                <div class="form-group">
                    <label for="member" class="control-label col-md-3">Member(s) :</label>
                    <div id="member" class="control-label col-md-8" style="text-align:justify">
                        <?php
                        $MemberList=$_MemberBao->getMember($Thesis)->getResultObject();
                        if ($MemberList!=null) {
                            foreach ($MemberList as $member) {
                                ?>
                                <div class="col-md-12">
                                <li class="col-md-6"><?php $Name = $_MemberBao->getStudent($member->getStudentId())->getResultObject();
                                    echo $Name->getFirstName() . ' ' . $Name->getLastName();?>
                                    <?php echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;(<a href="user_details.php?id='.$Name->getEmail().'">' . $Name->getEmail() . '</a>)' ?></li>
                                    <?php
                                    if (isset($_SESSION['login.php'])) {
                                        ?>
                                        <ul class="col-md-5">
                                            <a href="?id=<?php echo $Result->getThesisId(); ?>&ruid=<?php echo $Name->getEmail(); ?>"
                                               style="text-align: right" onclick="return confirm('sure to remove !!');">
                                                <img src="./resources/img/removeMember.ico" alt="Edit"
                                                     style="height: 20px;width: 20px">
                                            </a>
                                        </ul>
                                        <?php
                                    }
                                        ?>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                <?php
                            }
                        }else{
                            echo "No member assigned";
                        }
                        ?>
                    </div>
                </div>

                
                <?php
                if(isset($_SESSION['login.php'])){
                    ?>
                    <hr>
                    <!-- Add Supervisor(s) -->
                    <div class="form-group">
                        <label for="supervisor_add" class="control-label col-md-3 text-info">Add Spervisor :</label>
                        <div class="col-md-6">
                            <input type="search" name="supervisor_add" id="supervisor_add" class="form-control alert-info" onkeyup="addSupervisorFunction(this.value);" placeholder="Search..." required>
                            <div id="addSupervisor" class="control-label" style="text-align: left"></div>
                        </div>
                    </div>

                    <!--Add Member(s)-->    
                    <div class="form-group">
                        <label for="student_add" class="control-label col-md-3 text-info">Add Member :</label>
                        <div class="col-md-6">
                            <input type="search" name="student_add" id="student_add" class="form-control alert-info" onkeyup="addStudentFunction(this.value);" placeholder="Search..." required>
                            <div id="addStudent" class="control-label" style="text-align: left"></div>
                        </div>
                    </div>
                    
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

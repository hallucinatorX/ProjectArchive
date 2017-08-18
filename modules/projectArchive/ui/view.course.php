<?php
include_once 'blade/view.course.blade.php';
include_once './common/class.common.php';
?>
<hr>
<div class="panel panel-default col-md-6 col-md-offset-3">
    <div class="panel-heading">
        Create Course
    </div>
    <div class="panel-body">
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label for="courseNo" class="control-label]">Course No</label>
                <input type="text" name="courseNo" id="courseNo" class="form-control" value="<?php
                if (isset($_GET['edit'])) echo $getROW->getCourseNumber();?>"/>
            </div>
            <div class="form-group">
                <label for="courseName" class="control-label">Course Name</label>
                <textarea name="courseName" id="courseName" class="form-control"><?php if(isset($_GET['edit'])) echo $getROW->getCourseName(); ?></textarea>
            </div>
            <div class="form-group">
                <?php if (isset($_GET['edit'])) { ?>
                    <div class="col-md-offset-5">
                        <input type="submit" class="col-md-4" name="update" value="Update">
                    </div>
                    <?php
                }
                else { ?>
                    <div class="col-md-offset-5">
                        <input type="submit" class="col-md-4" name="create" value="Submit">
                    </div>
                    <?php
                }
                ?>

            </div>
        </form>

<!--        Show the courses-->
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>
                        Course No
                    </th>
                    <th>
                        Course Name
                    </th>
                </tr>

                <?php
                $Result=$_CourseBao->getAllCourses();

                if($Result->getIsSuccess()) {
                    $CourseList = $Result->getResultObject();

                    foreach ($CourseList as $Course) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $Course->getCourseNumber(); ?>
                            </td>
                            <td>
                                <?php echo $Course->getCourseName(); ?>
                            </td>
                            <td>
                                <a href="?edit=<?php echo $Course->getCourseId(); ?>" onclick="return confirm('sure to edit !');">edit</a>
                            </td>
                            <td>
                                <a href="?del=<?php echo $Course->getCourseId();?>" onclick="return confirm('sure to delete !');">delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else {
                    echo $Result->getResultObject();
                }
                ?>

            </table>
        </div>

    </div>
</div>

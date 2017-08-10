<?php
include_once 'blade/view.project.blade.php';
include_once './common/class.common.php';
?>
<hr>
<div class="panel panel-default col-md-6 col-md-offset-3">
    <div class="panel-heading">
        Create Project
    </div>
    <div class="panel-body">
        <form method="post">
            <div class="form-group">
                <label for="title" class="control-label]">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="create" value="Submit">
            </div>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Description
                </th>
            </tr>

            <?php
            $Result=$_ProjectBao->getAllProject();

            if($Result->getIsSuccess()) {
                $ProjectList = $Result->getResultObject();

                foreach ($ProjectList as $Project) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $Project->getTitle(); ?>
                        </td>
                        <td>
                            <?php echo $Project->getDescription(); ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            else{
                echo $Result->getResultObject();
            }
            ?>
        </table>
    </div>
</div>

<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.login.blade.php';
include_once './common/class.common.php';


?>

<div id="form" style="padding-bottom: 170px;">
  
  <div class="panel panel-default" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15); ">
    
    <div class="panel-heading" style="text-align: center">
        <strong style="font-size: large"><img src="./resources/img/login.png" alt="Icon" style="height: 30px;width: 30px;">
        <?php echo ' '.LangUtil::get('login_member_login'); ?></strong></div>

    <div class="panel-body">

        <form method="post" class="form-horizontal">

            <div class="form-group" style="padding-top: 30px">
              <label class="control-label col-md-3" for="txtEmail">
              <?php echo LangUtil::get('login_email'); ?>:
              </label>
              <div class="col-md-8">
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="<?php echo LangUtil::get('login_enter_email'); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3" for="txtPassword">
              <?php echo LangUtil::get('login_password'); ?>:
              </label>
              <div class="col-md-8">
                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="<?php echo LangUtil::get('login_enter_password'); ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-2 col-md-6">
                <a href="<?php echo PageUtil::$USER_NEW; ?>">Register as a new user</a>
              </div>
              <div class="col-md-4">
                <a href="<?php echo PageUtil::$USER_FORGOT_PASSWORD; ?>">Forgot password</a>
              </div>
            </div>

            <div class="form-group" style="padding-top: 20px">
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" name="login" value="login" class="btn btn-primary"><?php echo LangUtil::get('login_submit'); ?></button>
              </div>
            </div>                

        </form>

    </div>

 </div>
    
</div>    

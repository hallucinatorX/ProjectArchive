<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.forgot_password.blade.php';
include_once './common/class.common.php';

?>

<div id="form" style="padding-bottom: 270px">
  
  <div class="panel panel-default" style="box-shadow: 0 3px 8px rgba(0,0,0,0.15);">

      <div class="panel-heading " style="text-align: center;margin-bottom: 25px">
          <strong style="font-size: large"><img src="./resources/img/forgot-pw.png" alt="Icon" style="height: 30px;width: 30px;">&nbsp;Forgot Password</strong></div>
    
    <div class="panel-body">
  
        <form method="post" class="form-horizontal">

            <div class="form-group">
              <label class="control-label col-sm-3" for="txtEmail">
              Email:
              </label>
              <div class="col-sm-8">
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Enter Email" required>
              </div>
            </div>


            <div class="form-group" style="padding-top: 20px">
              <div class="col-sm-offset-3 col-sm-8">
                <button type="submit" name="request" value="request" class="btn btn-primary">Request Password</button>
              </div>
            </div>                

        </form>

    </div>

 </div>
    
</div>    

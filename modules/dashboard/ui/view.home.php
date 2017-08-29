<?php
include_once '/template/basic/navbar.php';
include_once 'blade/view.home.blade.php';

?>



<div class="col-sm-12" style="padding-bottom: 260px">

<?php
    if(isset($globalMenu)){
        echo print_dashboard_body_tab($globalMenu);
    }
?>

</div>







<div class="row" style="padding-top: 35px">
	<div class="col-sm-12">
		<?php
			//TODO: check whether routing is active
			if(isset($page) && apply_routing($page)){

				//echo 'test again:'.$page;
				
				include $page;
			}
			else
            {
                echo "not entering body";
            }
		?>
	</div>
</div>

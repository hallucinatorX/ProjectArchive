<?php

include_once 'blade/view.mostRecent.blade.php';
include_once './common/class.common.php';

?>

<div class="panel panel-default">

    <div class="panel-heading" style="text-align: center;margin-bottom: 25px;font-size: large">
        <strong><img src="./resources/img/recent.ico" alt="Icon" style="height: 30px;width: 30px;">&nbsp;Recent Discussions</div>
    
    <div class="panel-body">

	
	<table class="table table-striped table-bordered">
	
	<?php
		
	$Result = $_MostRecentBAO->getAllDiscussions();

	//if DAO access is successful to load all the Terms then show them one by one
	if($Result->getIsSuccess()){

		$DiscussionList = $Result->getResultObject();
	?> 
		<tr>
			<th>Questions</th>
			<th>Category</th>
			<th>Tags</th>
		</tr>
		<?php
		for($i = 0; $i < sizeof($DiscussionList); $i++) {
			$Discussion = $DiscussionList[$i];
			?>
		    <tr>
		    <td><a href="discussion_comment.php?view=<?php echo $Discussion->getID(); ?>" onclick="return ; " >
		    <?php echo $Discussion->getName(); ?></a></td>
			    <td><?php $id = $Discussion->getCategory();
			    	$Result2 = $_MostRecentBAO->getNameFromCatagoryID($id);
			    	if ($Result2->getIsSuccess()) {
			    		$DiscussionCategory = $Result2->getResultObject();

			    		echo $DiscussionCategory->getName();
			    	}
			    	//echo $_DiscussionBAO->getNameFromCatagoryID($id); ?></td>
			    <td><?php echo $Discussion->getTag(); ?></td>
		    </tr>
	    <?php

		}

	}
	else{

		echo $Result->getResultObject(); //giving failure message
	}

	?>
	</table>
	</div>
</div>

<div class="panel panel-default">

    <div class="panel-heading" style="text-align: center;margin-bottom: 25px;font-size: large">
        <strong><img src="./resources/img/searchDiscussion.png" alt="Icon" style="height: 30px;width: 30px;">&nbsp;Search Discussions</div>
    
    <div class="panel-body">

	
		<table class="table table-striped table-bordered">

			<tr><th>Category</th></tr>
			<tr><?php
				$Result = $_MostRecentBAO->getAllDiscussionCategorys();
									//if DAO access is successful to load all the Roles then show them one by one
				if($Result->getIsSuccess())
				{

					$DiscussionCategorys = $Result->getResultObject();
								
			        for ($i=0; $i < sizeof($DiscussionCategorys); $i++) 
					{ 
						$DiscussionCategory = $DiscussionCategorys[$i];?>
						<tr><td><a href="search_discussion.php?Category=<?php echo $DiscussionCategory->getID(); ?>" onclick="return; "> <?php echo $DiscussionCategory->getName() ?> </a></td></tr>
					<?php
					}
				}

				?>
			</tr>
		</table>
</div>
</div>
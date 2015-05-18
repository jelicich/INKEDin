<?php
if(!empty($leftcol))
{
	$l_count = 1;
	for($i = 0; $i < sizeof($leftcol); $i++)
	{
		if($l_count > 5)
		{
			$l_count = 1;
		}
		if($l_count == 1)
		{
			$col_size = 12;
		}
		else
		{
			$col_size = 6;
		}
		$location = $leftcol[$i]['province'];
		if(!empty($leftcol[$i]['city']))
		{
			$location .= ', '.$leftcol[$i]['city'];
		}
	?>	
	
		<!-- img -->
		<article class="col-md-<?php echo $col_size ?> pic-sq-grid">
			<div class="inner-pic-sq-grid border-img">
				<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal"><img src="<?php echo $leftcol[$i]['photo'] ?>" alt="<?php echo $leftcol[$i]['description'] ?>" /></a>
				<div class="pic-details">
					<p class="caption"><?php echo $leftcol[$i]['description'] ?></p>
					<ul class="owner-container clearfix">
						<li class="owner-pic"><a href="/profile/<?php echo $leftcol[$i]['user_id'] ?>"><img src="<?php echo $leftcol[$i]['profile_photo'] ?>" alt="<?php echo $leftcol[$i]['name'] .' '. $leftcol[$i]['last_name'] ?> ?>" /></a></li>
						<li class="owner-detail">
							<h2><a href="/profile/<?php echo $leftcol[$i]['user_id'] ?>"><?php echo $leftcol[$i]['name'] .' '. $leftcol[$i]['last_name'] ?></a></h2>
							<p><?php echo $location ?></p>
						</li>
					</ul>
				</div>
			</div>
		</article>
		<!-- end img -->
	<?php 
		$l_count++;
	}//end for
}//end if
?>